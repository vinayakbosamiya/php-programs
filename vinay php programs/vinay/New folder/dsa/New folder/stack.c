#include<stdio.h>
#define size 5
int stack[size];
int tos = -1;
void push();
void pop();
void peep();
void display();

void main(){
    push();
    push();
    push();
    push();
    printf("\n \n");
  
    printf("value added succsesfully \n");
    printf("\n \n");
    display();
    pop();
   
    display();
    peep();

    
}

void push(){
    int ele;
    if(tos>=size-1){
        printf("stack is full");
    }
    else{
        printf("etner the element\n");
        scanf("%d",&ele);
        tos++;
        stack[tos] = ele;
        printf("value added succsesfully\n");
    }
}
void display(){
    int i;
    if(tos<=-1){
        printf("stack is emepty\n");
    }
    else{
        printf("value is\n");
        for ( i = tos; i >= 0; i--)
        {
            printf("%d \t",stack[i]);
        }
    }
    
}

void pop(){
    if(tos<= -1){
        printf("stack is empty\n");
    }
    else{
        tos--;
        printf("\nvalue is deleted succsesfully\n");
    }
}

void peep(){
    int pos;
    if(tos <= -1)
    {
        printf("stack is empty");
    }
    else{

        printf("\nenter the position");
        scanf("%d",&pos);

        if(pos>tos+1 || pos<1)
        {
            printf("stack is out of range\n");
        }
        else{
            printf("\nposition is %d at the value %d\n",pos ,stack[tos - pos+1]);
        }
    }
}