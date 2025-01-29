<x-master title="Page d'accueil">
<x-alert type="warning" >
    <strong>Hello World</strong>
</x-alert >
<x-alert type="danger" >
    <strong>HOLA</strong>
</x-alert >
<h3>Home</h3>

<x-users-table :users="$users"/>

</x-master >
    