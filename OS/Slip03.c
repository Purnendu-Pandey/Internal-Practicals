/*
Q.1) Write a C program that behaves like a shell which displays the command prompt ‘myshell$’.
It accepts the command, tokenizes the command line and execute it by creating the child process.
Also implement the additional command ‘count’ as myshell$ 
count l filename: It will display the number of lines in a given file
*/
#include<sys/types.h>
#include<sys/stat.h>
#include<fcntl.h>
#include<stdio.h>
#include<stdlib.h>
#include<string.h>

void maketoks(char *s,char*tok[])
{
	int i=0;
	char *p;
	p=strtok(s,"  ");
	while(p!=NULL)
	{ 
	    tok[i++]=p;
	    p=strtok(NULL,"   ");
	}
	tok[i]=NULL;
}
void count(char *fn,char op)
{
	int fh,cc=0,wc=0,lc=0;
	char c;
	fh=open(fn,O_RDONLY);
	if(fh==-1)
	{
	  printf("Files %s not found \n",fn);
	  return;
	}
	while(read(fh,&c,1>0))
	{
	   if(c==' ')
	     wc++;
	   else if(c=='\n')
           { 
             wc++;
             lc++;
           }
           cc++;
        }
        close(fh);
        switch(op)
        {
          case 'c':
                 printf("Number of character :%d\n",cc-1);
                 break;
          case 'w':
                 printf("Number of words :%d\n",wc);
                 break;
          case 'l':
                 printf("Number of lines :%d\n",lc+1);
                 break;
        }
}
void main()
{
       char buff[80],*args[10];
       int pid;
       while(1)
       {
          printf("myshell$");
          fflush(stdin);
          fgets(buff,80,stdin);
          buff[strlen(buff)-1]='\0';
          maketoks(buff,args);
          if(strcmp(args[0],"count")==0)
             count(args[2],args[1][0]);
          else
          {
              pid=fork();
              if(pid>0)
                wait();
              else
              {
                  if(execvp(args[0],args)==-1)
                     printf("Bad Command");
              }
           }
         }
}
