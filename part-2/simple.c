#include <stdio.h>
#include <stdlib.h>

int main() {
    FILE *fptr;
    char ch;

    fptr = fopen("/home/parallels/labs-sec/lab2/simple_example/data/simple.txt", "w");
    fputs("Hello World!", fptr);

    fptr = fopen("/home/parallels/labs-sec/lab2/simple_example/data/secret.txt", "r");
    while ((ch = fgetc(fptr)) != EOF) {
        printf("%c", ch);
    }

    fclose(fptr);

    return 0;
}