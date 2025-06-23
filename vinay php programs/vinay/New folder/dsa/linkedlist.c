#include <stdio.h>
#include <stdlib.h>
struct list
{
    int info;
    struct list *next;
};

typedef struct list node;
node *p;

void create(int, node *);
void display(node *);
void addbeg(int, node *);
void addafter(int, int, node *);
void deleted(int, node *);

void main()
{
    p = NULL;
    clrscr();
    create(10, p);
    create(20, p);
    create(5, p);
    display(p);
    printf("\n\n");
    addbeg(0, p);
    printf("After adding element at beginning of the Linked List :\n");
    display(p);
    printf("\n\n");
    addafter(2, 500, p);
    printf("After adding element in specific position:\n");
    display(p);
    printf("\n\n");
    deleted(20, p);
    printf("After Deleted elements are :\n");
    display(p);
    getch();
}
void create(int ele, node *q)
{
    if (q == NULL)
    {
        p = (node *)malloc(sizeof(node));
        p->info = ele;
        p->next = NULL;
    }
    else
    {
        while (q->next != NULL)
        {
            q = q->next;
        }
        q->next = (node *)malloc(sizeof(node));
        q->next->info = ele;
        q->next->next = NULL;
    }
}

void addbeg(int ele, node *q)
{
    p = (node *)malloc(sizeof(node));
    p->info = ele;
    p->next = q;
}

void display(node *q)
{
    while (q != NULL)
    {
        printf("%d \t", q->info);
        q = q->next;
    }
}
void addafter(int c, int ele, node *q)
{
    node *temp;
    int i;
    for (i = 1; i < c; i++)
    {
        q = q->next;
        if (q == NULL)
        {
            printf("\n position is out of range");
            return;
        }
    }
    temp = (node *)malloc(sizeof(node));
    temp->info = ele;
    temp->next = q->next;
    q->next = temp;
}
void deleted(int ele, node *q)
{
    node *temp;
    if (q->info == ele)
    {
        p = q->next;
        free(q);
        return;
    }
    while (q->next->next != NULL)
    {
        if (q->next->info == ele)
        {
            temp = q->next;
            q->next = q->next->next;
            free(temp);
            return;
        }
        q = q->next;
    }
}
/*
void deleted(int ele, node *q)
{
    node *temp;
    if (q->info == ele)
    {
        p = q->next;
        free(q);
        return;
    }
    while (q->next->next != NULL)
    {
        if (q->next->info == ele)
        {
            temp = q->next;
            q->next = q->next->next;
            free(temp);
            return;
        }
        q = q->next;
    }
}*/