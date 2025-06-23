#include<stdio.h>
#define size 5

int stack[size];
int tos = -1;

void push();
void pop();
void display();
void peep();

void main(){
    push();
    push();
    push();
    push();
    printf("\n \n");
    display();
    printf("\n \n");
    peep();
    printf("\n \n");
    pop();
    display();
    printf("\n \n");
    
}
void push(){
    int ele;
    if(tos>= size-1)
    {
        printf("stack is full\n");
    }
    else{
        printf("enter the value\n");
        scanf("%d",&ele);
        tos++;
        stack[tos] = ele;
        printf("value added succ...\n");
    }
}
void pop(){
    if(tos <= -1)
    {
        printf("stack is empty\n");
    }
    else{
        tos--;
        printf("value deleted succ....\n");
    }
}
void display(){
    if(tos <= -1)
    {
        printf("stack is empty\n");
    }
    else{
        for(int i=tos; i>=0;i--)
        {
            printf("%d\t",stack[i]);
        }
    } 
}
void peep(){
    int pos;
    if(tos <= -1)
    {
        printf("stack is empty\n");
    }
    else{
        printf("enter the position\n");
        scanf("%d",&pos);
        if(pos>tos+1 || pos < 1){
            printf("out of range\n");
        }
        else{
            printf("\n values is = %d at position = %d\n",pos,stack[tos - pos]);
        }
    }
}