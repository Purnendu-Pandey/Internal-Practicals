/* 
Q.1) Write a C program to illustrate the concept of creating a process.Parent process
creates a child and terminates. 
*/
#include <stdio.h>
#include <sys/types.h>
#include <unistd.h>
int main()
{
    int pid = fork();
    if (pid > 0) 
    {
        printf("Parent process\n");
        printf("ID : %d\n\n", getpid());
    }
    else if (pid == 0)
    {
        printf("Child Process\n");
        printf("ID: %d\n", getpid());
        printf("Parent -ID: %d\n\n", getppid());
        sleep(10);
        printf("\nChild Process \n");
        printf("ID: %d \n", getpid());
        printf("Parent -ID: %d\n", getppid());
    }
    else 
    {
        printf("Failed To Create Child Process");
    }
    return 0;
}

