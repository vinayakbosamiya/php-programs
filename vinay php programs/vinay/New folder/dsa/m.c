// Online C compiler to run C program online
#include <stdio.h>

int power(int a, int b);
void main()
{
	int a = 2, b = 3, p;
	printf("Enter two numbers:");
	// scanf("%d %d",&a,&b);
	p = power(a, b);
	printf("\n p = %d",p);
}

int power(int a, int b)
{
	int p = 1;
	if(b==0)
		return 1;
	else
		p = a * power(a, b-1);
    //      2 *        2  = 4
	//      2 *        
	return p;
}