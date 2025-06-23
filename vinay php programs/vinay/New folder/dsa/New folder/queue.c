#include<stdio.h>
#define s 50
int front = -1,rear = -1;
int queue[s];
void enqueue(int);
void dequeue();
void display();
int main(){
    enqueue(10);
    enqueue(20);
    enqueue(30);
    enqueue(40);
    display();
    dequeue();
    display();
    return 0;

}
void dequeue(){
    if(front < 0)
    {
        printf("\nqueue is empty\n");
    }
    else{
        if(front == rear)
        {
            front= rear = -1;
        }
        else{
            front++;
            printf("\nvalue is deleted now seccsessfully\n");
        }
    }
}

void enqueue(int ele){
    if (rear>=s-1)
    {
        printf("queue is full");
    }
    else{
        rear++;
        queue[rear]=ele;
        if (rear==0)
        {
            front = 0;
        }      
    }
}
void display(){
    if(front<0){
        printf("\nqueue is empty\n");
    }
    else{
        for(int i = front;i<=rear;i++)
        {
            printf("\nindex = %d\t value=  %d\n",i,queue[i]);
        }
    }
}