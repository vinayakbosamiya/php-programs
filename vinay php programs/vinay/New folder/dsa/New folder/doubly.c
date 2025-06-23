#include<stdio.h>
#include<stdlib.h>
struct list
{
    int info;
    struct list *next, *prev;
};
typedef struct list nodes;
nodes* p;


void create(int, nodes*);
void disply(int ,nodes*);
void addbeg(int , int ,nodes*);
void addafter(int , int ,nodes*);
void deleted(nodes*);

int main(){
    p = NULL;
    create(10,p);
    create(20,p);
    create(30,p);
}

void create(int ele,nodes*q){
    if(q == NULL)
    {
        p = (nodes*)malloc(sizeof(nodes));
        p->info = ele;
        p->next = NULL;
    }
    else{
        while (q->next != NULL)
        {
            q = q->next;
        }
        
        q = (nodes*)malloc(sizeof(nodes));
        q->info = ele;
        q->next->next = NULL;
    }
}

void display(nodes*q)
{
    while(q!=NULL){
        printf("%d \t",q->info);
        q = q->next;
    }
}


