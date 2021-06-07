<style>
    html,
    body {
        margin: 0;
        padding: 0;
    }

    body {
        font-family: sans-serif;
        font-size: 18px;
        background-color: #A1DAE5;
    }

    .container {
        width: 90%;
        padding: 1em;
        margin: 1em auto;
        background-color: white;
        border-radius: 1em;
    }

    h2 {
        text-align: center;
    }

    table {
        table-layout: fixed;
        width: 100%;
        border-collapse: collapse;
    }

    thead th {
        background-color: #102633;
        color: #fff;
        font-weight: normal;
        padding: .5em;
        text-align: left;
    }

    tbody td {
        text-align: left;
        padding: .5em;
    }

    thead th:nth-of-type(3),
    tbody td:nth-of-type(3) {
        text-align: center;
    }

    tbody tr {
        border-bottom: 2px solid white;
    }

    .index {
        background-color: rgba(92, 184, 92, .5);
    }

    .create {
        background-color: rgba(2, 117, 216, .5);
    }

    .read {
        background-color: rgba(240, 173, 78, .5);
    }

    .update {
        background-color: rgb(224, 241, 17);
    }

    .delete {
        background-color: rgba(217, 83, 79, .5);
    }

</style>

<div class="container">
    <h2>{{ env('APP_NAME', 'Mikroservis Finance') }} v{{ env('APP_VERSION', '0.1.0') }} RESTful Rute</h2>
    <table>
        <thead>
            <tr>
                <th>Ime</th>
                <th>URL</th>
                <th>HTTP Metoda</th>
                <th>Opis</th>
            </tr>
        </thead>
        <tbody>
            <tr class="index">
                <td>INDEX</td>
                <td>
                    <a href="{{ url('/api/bills') }}">/api/bills</a>
                </td>
                <td>GET</td>
                <td>Lista svih računa</td>
            </tr>
            <tr class="index">
                <td>INDEX</td>
                <td>
                    <a href="{{ url('/api/bills') }}">/api/shifts</a>
                </td>
                <td>GET</td>
                <td>Lista svih smjena</td>
            </tr>
            <tr class="index">
                <td>INDEX</td>
                <td>
                    <a href="{{ url('/api/payment-methods') }}">/api/payment-methods</a>
                </td>
                <td>GET</td>
                <td>Lista svih načina plaćanja</td>
            </tr>
            <tr class="create">
                <td>CREATE</td>
                <td>/api/bills</td>
                <td>POST</td>
                <td>Kreira novi račun</td>
            </tr>
            <tr class="read">
                <td>READ</td>
                <td>/api/bills/:id</td>
                <td>GET</td>
                <td>Prikazuje informacije o računu</td>
            </tr>
            <tr class="update">
                <td>UPDATE</td>
                <td>/api/bills/:id</td>
                <td>PUT</td>
                <td>Ažurira račun</td>
            </tr>
            <tr class="delete">
                <td>DELETE</td>
                <td>/api/bills/:id</td>
                <td>DELETE</td>
                <td>Briše račun</td>
            </tr>
        </tbody>
    </table>
</div>
