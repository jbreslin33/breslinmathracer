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
 
project(Server)
 
	set(CMAKE_MODULE_PATH "/usr/local/lib/OGRE/cmake/;${CMAKE_MODULE_PATH}")
	set(OGRE_SAMPLES_INCLUDEPATH
		/usr/local/share/OGRE/samples/Common/include/
	)

#POSTGRES..........................................
#
# Distributed under the OSI-approved BSD License (the "License");
# see accompanying file Copyright.txt for details.
#
# This software is distributed WITHOUT ANY WARRANTY; without even the
# implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
# See the License for more information.
#=============================================================================
# (To distribute this file outside of CMake, substitute the full
#  License text for the above reference.)

# ----------------------------------------------------------------------------
# History:
# This module is derived from the module originally found in the VTK source tree.
#
# ----------------------------------------------------------------------------
# Note:
# PostgreSQL_ADDITIONAL_VERSIONS is a variable that can be used to set the
# version mumber of the implementation of PostgreSQL.
# In Windows the default installation of PostgreSQL uses that as part of the path.
# E.g C:\Program Files\PostgreSQL\8.4.
# Currently, the following version numbers are known to this module:
# "9.1" "9.0" "8.4" "8.3" "8.2" "8.1" "8.0"
#
# To use this variable just do something like this:
# set(PostgreSQL_ADDITIONAL_VERSIONS "9.2" "8.4.4")
# before calling find_package(PostgreSQL) in your CMakeLists.txt file.
# This will mean that the versions you set here will be found first in the order
# specified before the default ones are searched.
#
# ----------------------------------------------------------------------------
# You may need to manually set:
#  PostgreSQL_INCLUDE_DIR  - the path to where the PostgreSQL include files are.
#  PostgreSQL_LIBRARY_DIR  - The path to where the PostgreSQL library files are.
# If FindPostgreSQL.cmake cannot find the include files or the library files.
#
# ----------------------------------------------------------------------------
# The following variables are set if PostgreSQL is found:
#  PostgreSQL_FOUND         - Set to true when PostgreSQL is found.
#  PostgreSQL_INCLUDE_DIRS  - Include directories for PostgreSQL
#  PostgreSQL_LIBRARY_DIRS  - Link directories for PostgreSQL libraries
#  PostgreSQL_LIBRARIES     - The PostgreSQL libraries.
#
# ----------------------------------------------------------------------------
# If you have installed PostgreSQL in a non-standard location.
# (Please note that in the following comments, it is assumed that <Your Path>
# points to the root directory of the include directory of PostgreSQL.)
# Then you have three options.
# 1) After CMake runs, set PostgreSQL_INCLUDE_DIR to <Your Path>/include and
#    PostgreSQL_LIBRARY_DIR to wherever the library pq (or libpq in windows) is
# 2) Use CMAKE_INCLUDE_PATH to set a path to <Your Path>/PostgreSQL<-version>. This will allow find_path()
#    to locate PostgreSQL_INCLUDE_DIR by utilizing the PATH_SUFFIXES option. e.g. In your CMakeLists.txt file
#    set(CMAKE_INCLUDE_PATH ${CMAKE_INCLUDE_PATH} "<Your Path>/include")
# 3) Set an environment variable called ${PostgreSQL_ROOT} that points to the root of where you have
#    installed PostgreSQL, e.g. <Your Path>.
#
# ----------------------------------------------------------------------------

set(PostgreSQL_INCLUDE_PATH_DESCRIPTION "top-level directory containing the PostgreSQL include directories. E.g /usr/local/include/PostgreSQL/8.4 or C:/Program Files/PostgreSQL/8.4/include")
set(PostgreSQL_INCLUDE_DIR_MESSAGE "Set the PostgreSQL_INCLUDE_DIR cmake cache entry to the ${PostgreSQL_INCLUDE_PATH_DESCRIPTION}")
set(PostgreSQL_LIBRARY_PATH_DESCRIPTION "top-level directory containing the PostgreSQL libraries.")
set(PostgreSQL_LIBRARY_DIR_MESSAGE "Set the PostgreSQL_LIBRARY_DIR cmake cache entry to the ${PostgreSQL_LIBRARY_PATH_DESCRIPTION}")
set(PostgreSQL_ROOT_DIR_MESSAGE "Set the PostgreSQL_ROOT system variable to where PostgreSQL is found on the machine E.g C:/Program Files/PostgreSQL/8.4")


set(PostgreSQL_KNOWN_VERSIONS ${PostgreSQL_ADDITIONAL_VERSIONS}
    "9.1" "9.0" "8.4" "8.3" "8.2" "8.1" "8.0")

# Define additional search paths for root directories.
set( PostgreSQL_ROOT_DIRECTORIES
   ENV PostgreSQL_ROOT
   ${PostgreSQL_ROOT}
   ${PostgreSQL_ADDITIONAL_SEARCH_PATHS}
)

#
# Look for an installation.
#
find_path(PostgreSQL_INCLUDE_DIR
  NAMES libpq-fe.h
  PATHS
   # Look in other places.
   ${PostgreSQL_ROOT_DIRECTORIES}
  PATH_SUFFIXES
    pgsql
    postgresql
    include
  # Help the user find it if we cannot.
  DOC "The ${PostgreSQL_INCLUDE_DIR_MESSAGE}"
)

find_path(PostgreSQL_TYPE_INCLUDE_DIR
  NAMES catalog/pg_type.h
  PATHS
   # Look in other places.
   ${PostgreSQL_ROOT_DIRECTORIES}
  PATH_SUFFIXES
    postgresql
    pgsql/server
    postgresql/server
    include/server
  # Help the user find it if we cannot.
  DOC "The ${PostgreSQL_INCLUDE_DIR_MESSAGE}"
)

# The PostgreSQL library.
set (PostgreSQL_LIBRARY_TO_FIND pq)
# Setting some more prefixes for the library
set (PostgreSQL_LIB_PREFIX "")
if ( WIN32 )
  set (PostgreSQL_LIB_PREFIX ${PostgreSQL_LIB_PREFIX} "lib")
  set ( PostgreSQL_LIBRARY_TO_FIND ${PostgreSQL_LIB_PREFIX}${PostgreSQL_LIBRARY_TO_FIND})
endif()

find_library( PostgreSQL_LIBRARY
 NAMES ${PostgreSQL_LIBRARY_TO_FIND}
 PATHS
   ${PostgreSQL_ROOT_DIRECTORIES}
 PATH_SUFFIXES
   lib
)
get_filename_component(PostgreSQL_LIBRARY_DIR ${PostgreSQL_LIBRARY} PATH)

if (PostgreSQL_INCLUDE_DIR AND EXISTS "${PostgreSQL_INCLUDE_DIR}/pg_config.h")
  file(STRINGS "${PostgreSQL_INCLUDE_DIR}/pg_config.h" pgsql_version_str
       REGEX "^#define[\t ]+PG_VERSION[\t ]+\".*\"")

  string(REGEX REPLACE "^#define[\t ]+PG_VERSION[\t ]+\"([^\"]*)\".*" "\\1"
         PostgreSQL_VERSION_STRING "${pgsql_version_str}")
  unset(pgsql_version_str)
endif()

# Did we find anything?
#include(${CMAKE_CURRENT_LIST_DIR}/FindPackageHandleStandardArgs.cmake)
#find_package_handle_standard_args(PostgreSQL
##                                  REQUIRED_VARS PostgreSQL_LIBRARY PostgreSQL_INCLUDE_DIR PostgreSQL_TYPE_INCLUDE_DIR
#                                  VERSION_VAR PostgreSQL_VERSION_STRING)
set( PostgreSQL_FOUND  ${POSTGRESQL_FOUND})

# Now try to get the include and library path.
if(PostgreSQL_FOUND)

  set(PostgreSQL_INCLUDE_DIRS ${PostgreSQL_INCLUDE_DIR} ${PostgreSQL_TYPE_INCLUDE_DIR} )
  set(PostgreSQL_LIBRARY_DIRS ${PostgreSQL_LIBRARY_DIR} )
  set(PostgreSQL_LIBRARIES ${PostgreSQL_LIBRARY_TO_FIND})

  #message("Final PostgreSQL include dir: ${PostgreSQL_INCLUDE_DIRS}")
  #message("Final PostgreSQL library dir: ${PostgreSQL_LIBRARY_DIRS}")
  #message("Final PostgreSQL libraries:   ${PostgreSQL_LIBRARIES}")
endif()

mark_as_advanced(PostgreSQL_INCLUDE_DIR PostgreSQL_TYPE_INCLUDE_DIR PostgreSQL_LIBRARY )

#END POSTGRES

# link the libraries to the executable
 
if (CMAKE_BUILD_TYPE STREQUAL "")
  # CMake defaults to leaving CMAKE_BUILD_TYPE empty. This screws up
  # differentiation between debug and release builds.
  set(CMAKE_BUILD_TYPE "RelWithDebInfo" CACHE STRING "Choose the type of build, options are: None (CMAKE_CXX_FLAGS or CMAKE_C_FLAGS used) Debug Release RelWithDebInfo MinSizeRel." FORCE)
endif ()
 
set(CMAKE_DEBUG_POSTFIX "_d")
 
set(CMAKE_INSTALL_PREFIX "${CMAKE_CURRENT_BINARY_DIR}/dist")
 
find_package(OGRE REQUIRED)
 
if(NOT "${OGRE_VERSION_NAME}" STREQUAL "Cthugha")
  message(SEND_ERROR "You need Ogre 1.7 Cthugha to build this.")
endif()
 
find_package(OIS REQUIRED)
 
if(NOT OIS_FOUND)
	message(SEND_ERROR "Failed to find OIS.")
endif()
 
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
set(CMAKE_CXX_FLAGS "-g -Wextra")
set(HDRS
	
	#main
	./main.h

	#baseEntity
	../baseentity/baseEntity.h

	#fsm
	../fsm/state.h	
	../fsm/stateMachine.h	

	#mailman
	../mailman/mailMan.h

	#letter
	../letter/letter.h
	
	#message
	../message/message.h
	
	#game
	../serverside/game/game.h
	../serverside/game/partido/gamePartido.h

	#game states
        ../serverside/game/states/gameStates.h
	
	#network
	../serverside/network/network.h
	
	#tdreamsock
	../serverside/tdreamsock/dreamSockLog.h
	../serverside/tdreamsock/dreamLinuxSock.h
	
		#shape
	../serverside/shape/shape.h
	../serverside/shape/partido/shapePartido.h

	#shape states
	../serverside/shape/partido/states/shapePartidoStates.h
	
	#move
	../serverside/move/move.h
	
	#move states
	../serverside/move/states/moveStates.h
	
	#steering
	../serverside/steering/steering.h
	
	#steering states
	../serverside/steering/states/steeringStates.h
	
	#seek
	../serverside/seek/seek.h
	
	#seek states
	../serverside/seek/states/seekStates.h
	
	#avoid
	../serverside/avoid/avoid.h
	
	#avoid states
	../serverside/avoid/states/avoidStates.h
	
	#computer
	../serverside/computer/computer.h
	../serverside/computer/partido/computerPartido.h
	
	#computer states
	../serverside/computer/states/computerStates.h	
	../serverside/computer/partido/states/computerPartidoStates.h	
	
	#rotation
	../serverside/rotation/rotation.h
	
	#rotation states
	../serverside/rotation/states/rotationStates.h	
		
	#math
	../math/vector3D.h
	
	#utility
	../utility/utility.h

	#bounds
	../serverside/bounds/bounds.h
	
	#server
	../serverside/server/server.h
	../serverside/server/partido/serverPartido.h
	
	#client
	../serverside/client/client.h
	../serverside/client/robust/clientRobust.h
	../serverside/client/robust/partido/clientPartido.h
	
	#client states
	../serverside/client/states/clientStates.h
	../serverside/client/robust/states/clientRobustStates.h
	../serverside/client/robust/partido/states/clientPartidoStates.h

	#test
	../serverside/test/test.h

	#test states
	../serverside/test/states/testStates.h

	#quiz
	../serverside/quiz/quiz.h

	#quiz states
	../serverside/quiz/states/quizStates.h

	#question
	../serverside/question/question.h
	../serverside/question/questionAttempts.h
	
	#battle
	../serverside/battle/battle.h
	
	#battle states
	../serverside/battle/states/battleStates.h
	
	#combatant
	../serverside/combatant/combatant.h
	
	#combatant states
	../serverside/combatant/states/combatantStates.h
)
 
set(SRCS

	#main
	./main.cpp

	#baseEntity
	../baseentity/baseEntity.cpp

	#mailman
	../mailman/mailMan.cpp

	#letter
	../letter/letter.cpp
	
	#message
	../message/message.cpp
	
	#game
	../serverside/game/game.cpp
	../serverside/game/partido/gamePartido.cpp

	#game states
        ../serverside/game/states/gameStates.cpp

	#dreamsock
	../serverside/tdreamsock/dreamSockLog.cpp
	../serverside/tdreamsock/dreamLinuxSock.cpp

	#network
	../serverside/network/network.cpp
	
	#shape
	../serverside/shape/shape.cpp
	../serverside/shape/partido/shapePartido.cpp
	
	#shape states
	../serverside/shape/partido/states/shapePartidoStates.cpp

	#move
	../serverside/move/move.cpp
	
	#move states
	../serverside/move/states/moveStates.cpp
	
	#steering
	../serverside/steering/steering.cpp
	
	#steering states
	../serverside/steering/states/steeringStates.cpp
	
	#seek
	../serverside/seek/seek.cpp
	
	#seek states
	../serverside/seek/states/seekStates.cpp
	
	#avoid
	../serverside/avoid/avoid.cpp
	
	#avoid states
	../serverside/avoid/states/avoidStates.cpp
	
	#computer
	../serverside/computer/computer.cpp
	../serverside/computer/partido/computerPartido.cpp
	
	#computer states
	../serverside/computer/states/computerStates.cpp
	../serverside/computer/partido/states/computerPartidoStates.cpp
	
	#rotation
	../serverside/rotation/rotation.cpp
	
	#rotation states
	../serverside/rotation/states/rotationStates.cpp
	
	#math
	../math/vector3D.cpp

	#utility
	../utility/utility.cpp
	
	#bounds
	../serverside/bounds/bounds.cpp
	
	#server
	../serverside/server/server.cpp
	../serverside/server/partido/serverPartido.cpp
	
	#client
	../serverside/client/client.cpp
	../serverside/client/robust/clientRobust.cpp
	../serverside/client/robust/partido/clientPartido.cpp

	#client states
	../serverside/client/states/clientStates.cpp
	../serverside/client/robust/states/clientRobustStates.cpp
	../serverside/client/robust/partido/states/clientPartidoStates.cpp

	#test
	../serverside/test/test.cpp

	#test states
	../serverside/test/states/testStates.cpp

	#quiz
	../serverside/quiz/quiz.cpp

	#quiz states
	../serverside/quiz/states/quizStates.cpp

	#question
	../serverside/question/question.cpp
	../serverside/question/questionAttempts.cpp
	
	#battle
	../serverside/battle/battle.cpp
	
	#battle states
	../serverside/battle/states/battleStates.cpp
	
	#combatant
	../serverside/combatant/combatant.cpp
	
	#combatant states
	../serverside/combatant/states/combatantStates.cpp
)
include_directories( ${OIS_INCLUDE_DIRS}
	${OGRE_INCLUDE_DIRS}
	${OGRE_SAMPLES_INCLUDEPATH}
)
 
add_executable(Server WIN32 ${HDRS} ${SRCS})
 
set_target_properties(Server PROPERTIES DEBUG_POSTFIX _d)
 
target_link_libraries(Server ${OGRE_LIBRARIES} ${OIS_LIBRARIES})
 
file(MAKE_DIRECTORY ${CMAKE_CURRENT_BINARY_DIR}/dist/bin)
file(MAKE_DIRECTORY ${CMAKE_CURRENT_BINARY_DIR}/dist/media)
 
# post-build copy for win32
 
set(EXECUTABLE_OUTPUT_PATH ${PROJECT_BINARY_DIR}/dist/bin)
 
install(TARGETS Server
	RUNTIME DESTINATION bin
	CONFIGURATIONS All)
  
install(FILES ${CMAKE_SOURCE_DIR}/dist/bin/linux/plugins.cfg
	${CMAKE_SOURCE_DIR}/dist/bin/linux/resources.cfg
	DESTINATION bin
	CONFIGURATIONS Release RelWithDebInfo Debug
)
 

#need this to link to postgresql 
target_link_libraries (Server pq) 
