#/*
#-----------------------------------------------------------------------------
#Filename:    CMakeLists.txt
#-----------------------------------------------------------------------------
#
#This source file is part of the
#   ___                 __    __ _ _    _ 
#  /___\__ _ _ __ ___  / / /\ \ (_) | _(_)
# //  // _` | '__/ _ \ \ \/  \/ / | |/ / |
#/ \_// (_| | | |  __/  \  /\  /| |   <| |
#\___/ \__, |_|  \___|   \/  \/ |_|_|\_\_|
#      |___/                              
#      Tutorial Framework
#      http://www.ogre3d.org/tikiwiki/
#-----------------------------------------------------------------------------
#*/
cmake_minimum_required(VERSION 2.6)
 
project(ServerApp)
 
if (CMAKE_BUILD_TYPE STREQUAL "")
  # CMake defaults to leaving CMAKE_BUILD_TYPE empty. This screws up
  # differentiation between debug and release builds.
  set(CMAKE_BUILD_TYPE "RelWithDebInfo" CACHE STRING "Choose the type of build, options are: None (CMAKE_CXX_FLAGS or CMAKE_C_FLAGS used) Debug Release RelWithDebInfo MinSizeRel." FORCE)
endif ()
 
set(CMAKE_DEBUG_POSTFIX "_d")
 
set(CMAKE_INSTALL_PREFIX "${CMAKE_CURRENT_BINARY_DIR}/dist")
 
# Find Boost
if (NOT OGRE_BUILD_PLATFORM_IPHONE)
	if (WIN32 OR APPLE)
		set(Boost_USE_STATIC_LIBS TRUE)
	else ()
		# Statically linking boost to a dynamic Ogre build doesn't work on Linux 64bit
		set(Boost_USE_STATIC_LIBS ${OGRE_STATIC})
	endif ()
	if (MINGW)
		# this is probably a bug in CMake: the boost find module tries to look for
		# boost libraries with name libboost_*, but CMake already prefixes library
		# search names with "lib". This is the workaround.
		set(CMAKE_FIND_LIBRARY_PREFIXES ${CMAKE_FIND_LIBRARY_PREFIXES} "")
	endif ()
	set(Boost_ADDITIONAL_VERSIONS "1.44" "1.44.0" "1.42" "1.42.0" "1.41.0" "1.41" "1.40.0" "1.40" "1.39.0" "1.39" "1.38.0" "1.38" "1.37.0" "1.37" )
	# Components that need linking (NB does not include header-only components like bind)
	set(OGRE_BOOST_COMPONENTS thread date_time)
	find_package(Boost COMPONENTS ${OGRE_BOOST_COMPONENTS} QUIET)
	if (NOT Boost_FOUND)
		# Try again with the other type of libs
		set(Boost_USE_STATIC_LIBS NOT ${Boost_USE_STATIC_LIBS})
		find_package(Boost COMPONENTS ${OGRE_BOOST_COMPONENTS} QUIET)
	endif()
	find_package(Boost QUIET)
 
	# Set up referencing of Boost
	include_directories(${Boost_INCLUDE_DIR})
	add_definitions(-DBOOST_ALL_NO_LIB)
	set(OGRE_LIBRARIES ${OGRE_LIBRARIES} ${Boost_LIBRARIES})
endif()

if (WIN32)
set(HDRS

	#main
	./main.h
	
	#game
	../ngame/serverSideGame.h
	#../ngame/serverSideNonNetworkedGame.h
	../ngame/serverSideNetworkedGame.h

	
	#dreamsock
	../tdreamsock/dreamSock.h
	../tdreamsock/dreamSockLog.h
)
 
set(SRCS
	#main
	./main.cpp
	
	#game
	../ngame/serverSideGame.cpp
	#../ngame/serverSideNonNetworkedGame.cpp
	../ngame/serverSideNetworkedGame.cpp
	
	#dreamsock
	../tdreamsock/dreamSockLog.cpp
	../tdreamsock/dreamSock.cpp
	../tdreamsock/dreamSockGlobal.cpp
	../tdreamsock/dreamWinSock.cpp
)
endif (WIN32)

if (UNIX)
set(HDRS
	#main
	./main.h
	
	#game
	../ngame/serverSideGame.h
	#../ngame/serverSideNonNetworkedGame.h
	../ngame/serverSideNetworkedGame.h
	
	#dreamsock
	../tdreamsock/dreamSock.h
	../tdreamsock/dreamSockLog.h
)
 
set(SRCS
	#main
	./main.cpp
	
	#game
	../ngame/serverSideGame.cpp
	#../ngame/serverSideNonNetworkedGame.cpp
	../ngame/serverSideNetworkedGame.cpp
	
	#dreamsock
	../tdreamsock/dreamSockLog.cpp
	../tdreamsock/dreamSock.cpp
	../tdreamsock/dreamSockGlobal.cpp
	../tdreamsock/dreamLinuxSock.cpp
)
endif (UNIX)
 
add_executable(ServerApp WIN32 ${HDRS} ${SRCS})
 
set_target_properties(ServerApp PROPERTIES DEBUG_POSTFIX _d)
 
file(MAKE_DIRECTORY ${CMAKE_CURRENT_BINARY_DIR}/dist/bin)
 
# post-build copy for win32
if(WIN32 AND NOT MINGW)
	add_custom_command( TARGET ServerApp PRE_BUILD
		COMMAND if not exist .\\dist\\bin mkdir .\\dist\\bin )
	add_custom_command( TARGET ServerApp POST_BUILD
		COMMAND copy \"$(TargetPath)\" .\\dist\\bin )
endif(WIN32 AND NOT MINGW)
 
if(MINGW OR UNIX)
	set(EXECUTABLE_OUTPUT_PATH ${PROJECT_BINARY_DIR}/dist/bin)
endif(MINGW OR UNIX)
 
if(WIN32)
 
	install(TARGETS ServerApp
		RUNTIME DESTINATION bin
		CONFIGURATIONS All)

   # as of sdk 1.7.2 we need to copy the boost dll's as well
   # because they're not linked statically (it worked with 1.7.1 though)
   install(FILES ${Boost_DATE_TIME_LIBRARY_RELEASE}
      ${Boost_THREAD_LIBRARY_RELEASE}
      DESTINATION bin
      CONFIGURATIONS Release RelWithDebInfo
   )
 
   install(FILES ${Boost_DATE_TIME_LIBRARY_DEBUG}
      ${Boost_THREAD_LIBRARY_DEBUG}
      DESTINATION bin
      CONFIGURATIONS Debug
   )
endif(WIN32)
 
if(UNIX)
 
	install(TARGETS ServerApp
		RUNTIME DESTINATION bin
		CONFIGURATIONS All)
endif(UNIX)

if(WIN32)
# Need to link this for timeGetTime windows function.
target_link_libraries (ServerApp winmm) 
endif(WIN32)
