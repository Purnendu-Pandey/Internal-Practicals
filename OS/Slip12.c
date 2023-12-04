/*
Q.1) Write a program to simulate RR CPU-scheduling. The arrival time and burst time for 
different n number of processes should be input to the program. (Time quantum = 2 units)
The output should give a Gantt chart.
*/
#include<stdio.h>
struct times
{
	int p,art,but,wtt,tat,rnt;
};
void sortart(struct times a[],int pro)
{
	int i,j;
	struct times temp;
	for(i=0;i<pro;i++)
	{
	   for(j=i+1;j<pro;j++)
	   {
	     if(a[i].art>a[j].art)
	     {
	       temp=a[i];
	       a[i]=a[j];
	       a[j]=temp;
	     }
	   }
	}
	return;
}
int main()
{
	int i,j,pro,time,remain,flag=0,ts;
	struct times a[100];
	float avgwt=0,avgtt=0;
	printf("Round Roubin Scheduling Algorithm \n");
	printf("Enter the number of process :");
	scanf("%d",&pro);
	remain=pro;
	for(i=0;i<pro;i++)
	{
	   printf("Enter arrival time for process:",i+1);
  	   scanf("%d",&a[i].art);

  	   printf("Enter burst time for the process:");
  	   scanf("%d",&a[i].but);
  	   a[i].p=i;
  	   a[i].rnt=a[i].but;
  	}
  	sortart(a,pro);
  	printf("Enter time quantum :");
  	scanf("%d",&ts);
  	printf("\n**********************************************\n");
  	printf("Gantt chart \n");
  	printf("0");
  	   
  	for(time=0,i=0;remain!=0;)
  	{
	   if(a[i].rnt<=ts && a[i].rnt>0)
	   {
	      time=time+a[i].rnt;
	      printf("->[p%d]<-%d",a[i].p,time);
	      a[i].rnt=0;
	      flag=1;
	   }
	   else if(a[i].rnt>0)
	   {
	      a[i].rnt=a[i].rnt-ts;
	      time=time+ts;
	      printf("-->[p%d]<--%d",a[i].p,time);
	   }
	   if(a[i].rnt==0 && flag==1)
	   {
	   	remain--;
	   	a[i].tat=time-a[i].art;
	   	a[i].wtt=time-a[i].art-a[i].but;
	   	avgwt=avgwt+time-a[i].art-a[i].but;
	   	avgtt=avgtt+time-a[i].art;
	   	flag=0;
	   }
	   if(i==pro-1)
	      i=0;
	      else if(a[i+1].art<=time)
	         i++;
	      else
	         i=0;  	   
       }
       printf("\n\n");
       printf("\n***************************************\n");
       printf("PID\t AT\t BT\t TAT\t WT\n");
       printf("\n***************************************\n");
       for(i=0;i<pro;i++)
       {
          printf("P%d\t%d\t%d\t%d\t%d\n",a[i].p,a[i].art,a[i].but,a[i].tat,a[i].wtt);
       }
       printf("\n***************************************\n");
       avgwt=avgwt/pro;
       avgtt=avgtt/pro;
       printf("Average Waiting Time :%2f\n",avgtt);
       printf("Average Turnaround Time :%2f\n",avgwt); 
}
