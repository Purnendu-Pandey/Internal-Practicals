/*
Q.1) Create an abstract class 'Bank' with an abstract method 'getBalance'. Rs.100, Rs.150 and 
Rs.200 are deposited in banks A, B and C respectively. 'BankA', 'BankB' and 'BankC' 
are subclasses of class 'Bank', each having a method named 'getBalance'. Call this method 
by creating an object of each of the three classes.
*/
abstract class Bank 
{
    public abstract int getBalance();
}
class BankA extends Bank 
{
    @Override
    public int getBalance()
    {
        return 100;
    }
}
class BankB extends Bank 
{
    @Override
    public int getBalance()
    {
        return 150;
    }
}

class BankC extends Bank 
{
    @Override
    public int getBalance()
    {
        return 200;
    }
}

public class Slip21 
{
    public static void main(String[] args) 
	{
        BankA a = new BankA();
        BankB b = new BankB();
        BankC c = new BankC();

        System.out.println("Balance in Bank A: Rs." + a.getBalance());
        System.out.println("Balance in Bank B: Rs." + b.getBalance());
        System.out.println("Balance in Bank C: Rs." + c.getBalance());
    }
}