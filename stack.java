class stack
{
	int size=5;
    int A[] = new int[size];
	public int top=-1;
	
	
	boolean isEmpty()
	{
		return(top<0);
		
	}
	boolean isFull()
	{
		return(top==size-1);
	}
   void push(int data)
	{
		if(isFull())
		{
			System.out.print("Arrays is full!!"); 
		}
		
		top =top+1;
		A[top]=data;
		
		
		
	}
	int pop()
	{
		int temp = 0;
		
		if(isEmpty())
		{
			return -1;
		
		}
		temp= A[top];	
        A[top]=0;		
		top=top-1;
		return temp;
		
	}
	void print(){
		for(int i=0;i<A.length;i++)
		{
			System.out.print(A[i]+" ");
		}
	}
	
	public static void main(String args[])	
	{
		stack s1=new stack();
		s1.push(5);
		s1.push(6);
		s1.push(10);
		System.out.println(s1.pop());
		s1.print();
		
	}
}
