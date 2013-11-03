#ifndef UTILITY_H
#define UTILITY_H

#include <string>

class Utility 
{

public:
Utility();
~Utility();

std::string intToString(int i);
std::string doubleToString(double d);
int stringToInt(std::string s);
};
#endif
