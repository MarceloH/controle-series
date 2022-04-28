<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NovaSerie extends Mailable
{
    use Queueable, SerializesModels;

    public String $nome;
    public String $qtdtemporadas;
    public String $qtdepisodios;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(String $nome, int $qtdtemporadas, int $qtdepisodios)
    {
        $this->nome = $nome;
        $this->qtdtemporadas = $qtdtemporadas;
        $this->qtdepisodios = $qtdepisodios;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.serie.nova-serie');
    }
}
