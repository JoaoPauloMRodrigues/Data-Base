//As arrow functions permitem ter um retorno implícito
//, que são valores retornados sem ter que usar a palavar return
const criarTarefa = (event) => {

    //preventDefault() impede que o evento padrão ocorra (ex.: seguir um link); event.
    event.preventDefault(); 
    const lista = document.querySelector('[data-list]');
    const input = document.querySelector('[data-form-input]');
    const valor = input.value;

    //adiconando elemtnos no DOM
    const tarefa = document.createElement('li');
    tarefa.classList.add('task')
    const conteudo = `<p class="content">${valor}</p>`;

    tarefa.innerHTML = conteudo;
    tarefa.appendChild(botaoConclui());

    lista.appendChild(tarefa);
    input.value = ' ';
}

const novaTarefa = document.querySelector('[data-form-button]');
novaTarefa.addEventListener('click', criarTarefa);

const botaoConclui = () => {
    const botaoConclui = document.createElement('button');
    botaoConclui.classList.add('check-button');
    botaoConclui.innerText = "concluir";
    botaoConclui.addEventListener('click',conluirTarefa);

    return botaoConclui;
}

const conluirTarefa = (event) => {
    const botaoConclui = event.target;

    const tarefaCompleta = botaoConclui.parentElement;

    tarefaCompleta.classList.toggle('done');
}