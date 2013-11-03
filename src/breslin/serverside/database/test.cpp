#include <stdio.h>
#include <postgresql/libpq-fe.h>
#include <string>

int main(int argc, char** argv) 
{
        PGconn          *conn;
        PGresult        *res;
        int             rec_count;
        int             row;
        int             col;
        conn = PQconnectdb("dbname=ljdata host=localhost user=dataman password=supersecret");

	return 0;
} 
