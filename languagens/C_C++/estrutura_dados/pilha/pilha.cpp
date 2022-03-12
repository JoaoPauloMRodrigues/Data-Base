#include <iostream>
#include <stdlib.h>
#include <string>
#define TAM 10

using namespace std;

void dump (int vetor[TAM]);

void pilha_push(int pilha[TAM], int valor,int *topo){
	if(*topo == (TAM - 1 )){
		cout << "Pilha cheia";
	} else {
		*topo = *topo + 1;
		pilha[*topo] = valor;
	}
	
}


int main (){
	int pilha[TAM] = {};
	int topo = -1;
	//dump(pilha);
	pilha_push(pilha,10,&topo);
	pilha_push(pilha,5,&topo);
	dump(pilha);
}

void dump (int vetor[TAM]){
	for(int i=0;i<TAM;i++){
		cout<< vetor[i] << "\n";
	}
}


