<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('css/newTransactionModal.css')}}">

    <title>dtmoney</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <!-- Header -->
    <div class="header-container">
        <div class="header-content">
            <img src="{{asset('logo.svg')}}" alt="logo dt money"/>
            <button type="button" data-bs-toggle="modal" data-bs-target="#newTransactionModal">
                Nova transação
            </button>
        </div>
    </div>

    <!-- Dashboard -->
    <main class="dashboard-main">
        <div class="summary">
            <div>
                <header>
                    <p>Entradas</p>
                    <img src="{{asset('entradas.svg')}}" alt="Entradas"/>
                </header>
                <strong>R$ 500,00</strong>
            </div>
            <div>
                <header>
                    <p>Saídas</p>
                    <img src="{{asset('saidas.svg')}}" alt="Saídas"/>
                </header>
                <strong>R$ 500,00</strong>
            </div>
            <div class="highlight-brackground">
                <header>
                    <p>Total</p>
                    <img src="{{asset('total.svg')}}" alt="Total"/>
                </header>
                <strong>R$ 500,00</strong>
            </div>
        </div>
        <div class="transactions">
            <table>
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Valor</th>
                        <th>Categoria</th>
                        <th>Data</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Desenvolvimento de site</td>
                        <td class="deposit">R$ 500,00</td>
                        <td>Venda</td>
                        <td>16/06/2022</td>
                    </tr>
                    <tr>
                        <td>Desenvolvimento de site</td>
                        <td class="withdraw">R$ 500,00</td>
                        <td>Venda</td>
                        <td>16/06/2022</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <!-- New Transaction Modal -->
    <div
        class="modal fade new-transaction-modal"
        id="newTransactionModal"
        tabindex="-1"
        aria-labelledby="newTransactionModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="transaction-modal-content">
                    <button
                        type="button"
                        class="transaction-modal-close"
                        data-bs-dismiss="modal"
                    >
                        <img src="{{asset('botao-fechar.svg')}}" alt="Fechar modal"/>
                    </button>

                    <form>
                        <h2>Cadastrar transação</h2>

                        <input
                            placeholder="Título"
                            value=""
                        />

                        <input
                            type="number"
                            placeholder="Valor"
                            value=""
                        />

                        <div class="transaction-type">
                            <button
                                class="transaction-type-button"
                                id="deposit-button"
                                type="button"
                                onclick="setTransactionType('deposit')"
                                activeColor="green"
                            >
                                <img src="{{asset('entradas.svg')}}" alt="Entrada"/>
                                <span>Entrada</span>
                            </button>
                            <button
                                class="transaction-type-button"
                                id="withdraw-button"
                                type="button"
                                onclick="setTransactionType('withdraw')"
                                activeColor="red"
                            >
                                <img src="{{asset('saidas.svg')}}" alt="Saída"/>
                                <span>Saída</span>
                            </button>
                        </div>

                        <input
                            placeholder="Categoria"
                            value=""
                        />

                        <button type="submit">
                            Cadastrar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="{{asset('js/newTransactionModal.js')}}"></script>
</body>
</html>
