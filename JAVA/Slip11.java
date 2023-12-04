/*
Q.1) Write a program to create parent class College(cno, cname, caddr) and derived class Department(dno, 
dname) from College. Write a necessary methods to display College details.
*/
class College 
{
    int cno;
    String cname;
    String caddr;

    public College(int cno, String cname, String caddr)
    {
        this.cno = cno;
        this.cname = cname;
        this.caddr = caddr;
    }
}
class Department extends College 
{
    int dno;
    String dname;

    public Department(int cno, String cname, String caddr, int dno, String dname) 
	{
        super(cno, cname, caddr); 
        this.dno = dno;
        this.dname = dname;
    }
}
public class Slip11
 {
    public static void main(String[] args) 
	{
        College c = new College(1,"Ryk","Clg Road");
        Department d =new Department(1, "Ryk","College Road",101,"Computer Science");

        System.out.println("College Information:");
        System.out.println("College Number: " + c.cno);
        System.out.println("College Name: " + c.cname);
        System.out.println("College Address: " + c.caddr);

        System.out.println("\nDepartment Information:");
        System.out.println("Department Number: " + d.dno);
        System.out.println("Department Name: " + d.dname);
    }
}