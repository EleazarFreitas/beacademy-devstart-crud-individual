function confirmDelete (){

  let form = document.getElementById("form");
  let identifier = document.getElementById("identifier").textContent;

  form.addEventListener('submit', function(event){
  
    let check = confirm ('O(A) aluno(a) ' + identifier + ' será excluído(a)!');

    if (check !== true){
      event.preventDefault();
    };

  });
}