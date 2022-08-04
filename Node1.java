class Node1{

	class Node{
		int data;
		Node next;
		
		public Node(int data)
		{
			this.data=data;
			this.next=null;
		}
	}
	
	Node top;
	boolean isEmpty()
	{
		return top==null ;
		
	}
	public void push(int data)
	{
		Node newNode=new Node(data);
		//Node current=head;
		if(isEmpty())
		{
			top=newNode;
			
		}
		else
		{
			newNode.next=top;
			top=newNode;
		}
		
	}
	void pop()
	{
		//int temp=0;
		Node current=top;
		if(isEmpty())
		{
			System.out.print("your stack is empty!");
		}
		else{
		//temp=Node.top;
		//Remove last Elements
		/*while(current.next.next!=null)
		{
			current=current.next;
		}
		current.next=null;*/
		Node temp;
		temp=top;
		top=top.next;
		
		
		}
		
		
	}
	void peek()
	{
		
		
		
	}
	void print()
	{
		Node current=top;
		//current=top;
		while(current!=null)
		{
			System.out.print(current.data+" ");
			current=current.next;
		}
		System.out.println();
	}
	



public static void main(String args[])
{
	Node1 node=new Node1();
	node.push(12);
	node.push(20);
	node.push(100);
	node.pop();
	node.print();
}

}