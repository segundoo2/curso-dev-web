<?php 

class Usuario
{
    protected $nivelAcesso;
}

class Funcionario extends Usuario
{
    protected $matricula;

}

class Cliente extends Usuario
{
    protected $nome;
}
