#include<stdio.h>

int main (){
	
	int teste = 123;
	int *p; //<- inizializando o ponteiro
	
	p = &teste; // <- assim ele est� salvando o endere�o o endere�o de teste
	
	printf("\n--- END DO APONTADO -----\n");
	printf("teste = %x",&teste);
	printf("\n\n--- END DE AONDE O PONTEIRO APONTA -----\n");
	printf("p = %x",p);
	
	printf("\n\n\n---- END DO PONTEIRO ESTA SALVO-----\n");
	printf("p = %x",&p); //<- endere�o de onde o ponteiro est� salvo
	
	printf("\n\n\n---- MUDANDO O VALOR DE TESTE PELO PONTEIRO -----\n");
	printf("teste = %d",teste);
	printf("\n\n---- MUDADO ----\n");
	
	*p = 321; //<- mudando o valor de onde o ponteiro aponta
	
	printf("teste = %d", teste);
	
}
