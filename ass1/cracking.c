#include<stdio.h>
#include<stdlib.h>

void main(int argc,char **argv){
	char password[15] = "securedpassword";
	if(strcmp(password,argv[1]) == 0){
		printf("\n\t\tPASSWORD CRACKED SUCCESFULLY\n");
	}
	else{
		printf("\n\t\tCOULD NOT CRACK THE PASSWORD\n");
	}
	exit(0);
}
