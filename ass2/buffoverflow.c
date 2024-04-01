#include<stdio.h>
#include<string.h>
#include<stdlib.h>

int main(int argc, char *argv[])
{
	char buffer[50];
	if (argc < 2){
		printf("strcpy() NOT EXECUTED........\n");
		printf("Syntax : %s <Characters>\n",argv[0]);
		exit(0);
	}
	strcpy(buffer,argv[1]);
	printf("Buffer content = %s\n",buffer);
	printf("strcpy() is executed.\n");
	return 0;
}
