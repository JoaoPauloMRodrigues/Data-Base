#include <iostream>
#define TAM 10
using namespace std;


struct lista{
   int ult;     
   int valor[TAM];     
};

void criaLista(lista *lis){
    lis->ult = -1;
}

void insereFinal(lista *lis, int valorIns){
    lis->ult++;
    lis->valor[ lis->ult ] = valorIns;
}

int main(){
	
	lista lis;
  	int valor;
	int pos;
  	pos = 0;
    criaLista(&lis);
    while ((valor != 0)&& (pos < TAM)){
    	cout << "Informe o valor a ser inserido: ";
        cin >> valor;   
    	insereFinal(&lis,valor);
    	pos++;
	}
    return 0;    
}
