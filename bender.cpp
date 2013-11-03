// This program will print to the screen anything in the double qoutes.

#include <iostream>
using namespace std;

int main ()
{
int r = 0;
int x = 0;
int y = 1; //practice number;
int a;
while (r < 3)
{
        cout << "What does ";
        cout << x;
        cout << " + ";
        cout << y;
        cout << " = ";
        cin >> a;
        if (a == x + y)
        {
                cout << "correct!\n";
                r = r + 1;
                x = x + 1;
                
        }
        else
        {
                cout << "incorrect!\n";
                r = r - 1;
                
        }
        cout << "number of correct answers: ";
        cout << r;
        cout << "\n";

 }
        
  return 0;
}














