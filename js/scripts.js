const { createApp } = Vue;

//Aggiungiamo la possibilità di scrivere nella lista di Todo creata ieri (sempre in persistenza, scrivendoli nel file JSON).

createApp ({
    data () {
        return {
        }
    },
    created() {
        axios
        .get('https//localhost/progettiBoolean/php-todo-list-json/todos.php')
        .then (res => {
            console.log(res.data);
            this.todos
        });
    }
}).mount('#app');