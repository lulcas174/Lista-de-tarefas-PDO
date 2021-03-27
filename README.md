# Lista-de-tarefas-PDO
Trabalhando com PDO pela primeira vez
<h1> O que esse código faz? 🤔 </br>
<h1> INDEX </h1>
<p>
No index eu comecei realizando a criação do formulário que seria uma das partes principais do projeto, ele seria responsável por cadastrar o input e o botão, no começo, eu utilizei o action para ele ir para a parte do cadastro. <br>
Após realizada a criação da classe de conexão e a lógica do create, eu queria que toda vez que adicionassse uma nova tarefa que ele se mantivesse na mesma página e desse um "refresh", então, eu utilizei um require_once no começo da página para ele chamar o script de create, deixei o action nulo e criei uma lógica no create, que caso o botão adicionar fosse acionado, rolasse a lógica de criar na mesma página, com isso, o index estava pronto
</p>
<br>
<h1> Conexão </h1>
<p>
O processo de criação da conexão foi o relativamente mais simples, por ser minha primeira vez trabalhando com lista dinamica, POO e PDO, foi de fato a parte mais simples. <br>
A linha de Raciocínio  foi simples, criar primeiro uma classe que seria instanciada em quase todos meus scripts que conteria a função pública de conexão com o banco, dentro dela, retornaria o banco dentro de um try catch para possiveis erros, só isso basicamente
</p
<br>
<h1> Create </h1> 
<p>
Como mencionado antes, o create vai ter toda a lógica do isset para ele ser chamado no index, esse código se repetirar no update, mas enfim, o create ele vai ter dentro dele o banco instanciado e a função getConnection que tem no banco
ele recebe o input do index e vai adicionando na tabela listagem, depois adiciona no parametro $inputTarefa.
</p>
<br>
<h1>Delete</h1>
<p> Foi onde eu tive mais dificuldade, meu deus do céu, eu nunca demorei tanto para fazer uma coisa como delete porque eu tava errando no select, não estava conseguindo deletar pois eu não tava recebendo o parâmetro do ID e eu também quando comecei a conseguir deletar, não delimitei parâmetro no delete
</p>
<br>
<h1>Select </h1>
<p> 
Essa função foi complicada de fazer, demais, porque ela mexe com foreach e concatena parâmetro, teve uma diferença muito grande do curso para a pratica real, para a criação desse for each eu precisei dentro dele criar uma variável que nela eu concateno uma string com lista e uma qubera de linha, nessa lista ela recebe o parametro do foreach "$lista' que passa o valor da tarefa que a lista vai sendo adicionada nela. <br>
Também dentro do mesmo foreach eu preciso criar 2 botões que vão ser responsáveis pelo update e o delete, eu entendi que consigo passar o id href com "" <a href="delete.php?id='.$lista['id']."depois que eu entendi isso (com muitas horass e ajuda) ficou infinitamente mais fácil, mas ainda dificil pois no update eu precisava passar o parametro do id, mas falemos dele no topico dele.
</p>
<br>
<h1> Update </h1>
<p>
O update é como o index, tirando o fato de que ele além de precisa receber o ID e a TAREFA, ele precisaria no action dele receber os dois, a minha solução foi dentro do update, além de rodar toda a lógica do isset  também, foi dar um get no ID dentro do update em si e passar esses paremtros na logica do PDO, e no bindparam chamar tanto id como input, usando  o headerlocation para atualizar rápido a página
</p>
