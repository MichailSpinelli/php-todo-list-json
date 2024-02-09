const { createApp } = Vue;

//Aggiungiamo la possibilità di scrivere nella lista di Todo creata ieri (sempre in persistenza, scrivendoli nel file JSON).

createApp ({
    data () {
        return {
        }
    },
    created() {
        axios
        .get('https://localhost/progettiBoolean/php-todo-list-json/todos.php')
        .then (res => {
            console.log(res.data);
            this.todos = res.data;
        });
    },
    methods: {
        addTodo(task) {
            axios
                .post('https://localhost/progettiBoolean/php-todo-list-json/todos.php' {
                    task: this.newTodo,
                    status: "false"
                })
                .then(res => {
                    this.todos.push(res.data);
                    this.newTodo = '';
                    });
        }
    }
}).mount('#app');