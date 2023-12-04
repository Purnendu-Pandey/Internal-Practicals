/*
Q.1) Implement the C Program to create a child process using fork(), display parent and child process id.
System Call Fork () is used to create processes.
*/
#include<stdio.h>
#include<sys/types.h>
#include<unistd.h>
int main()
{
    pid_t pid=fork();
    if (pid == 0)
    {
       printf("\n You Are In Child Process \n ");
    }
    else if(pid>0)
    {
       printf("\n You Are In Parent Process \n");
    }
    else
    {
       printf("Fork Failed");
    }
    return 0;
}
