/*
Q.1) Implement the C Program to create a child process using fork(), display parent and 
child process id.
*/
#include<stdio.h>
#include<sys/types.h>
void ChildProcess();
void ParentProcess();
int main()
{
	 pid_t pid;
	 pid=fork();
	 if (pid==0)
	    ChildProcess(pid);
	 else
	    if (pid>0)
	    ParentProcess(pid);
	 else
	    printf("unsuccessful");  
}
	 void ChildProcess(int pid)
	 { 
	    printf("\n Child");
	    printf("\n My ID : %d",getpid());
	    printf("\n My Parent Id :%d",getppid());
	 }
	 void ParentProcess(int pid)
	 {
	    printf("\n Parent ");
	    printf("\n My ID : %d",getpid());
	    printf("\n My Parent Id : %d\n",getppid());
	 }
