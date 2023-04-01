<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public static $corsi = [ 
        [
            'id' => 1,
            'name' => 'zumba',
            'cover' => "/image/3.jpg",
            'info' => "Il corso di Istruttore Fitness e Body Building online ha l'obiettivo di formare i nuovi professionisti della Sala Pesi. L'Istruttore di Sala Pesi svolge un ruolo fondamentale in palestre e centri fitness, dove si trova a lavorare con persone con gli obiettivi più diversi: dal dimagrimento all'ipertrofia muscolare. Saranno pertanto approfondite tutte le tematiche inerenti l'allenamento con un'analisi dettagliata degli esercizi, della meccanica muscolare e delle tecniche di allenamento finalizzate all'incremento della massa muscolare, della forza e del dimagrimento, ma anche gli aspetti necessari a realizzare una programmazione finalizzata a migliorare gli aspetti di forma generale e di prevenzione delle patologie connesse con la sedentarietà. In un corso di formazione per Istruttore Fitness e Body Building non può mancare un approfondimento sull'alimentazione e l'integrazione sportiva. La formazione a distanza NonSoloFitness prevede: l'invio del libro di testo (A scuola di Fitness), consultazione online di Video e Slide, accesso ad un Gruppo Facebook Privato, sessione con un docente NonSoloFitness su Skype / WhatsApp. Al termine del corso è previsto un esame, superato il quale verrà rilasciata la certificazione NonSoloFitness con riconoscimento AICS - EPS CONI (vedi esempio) e il Diploma Nazionale con Tesserino Tecnico corredato da foto e inserimento nell'Albo degli Istruttori e dei Tecnici. Come da normativa vigente il Diploma è emesso direttamente dall'EPS CONI e firmato dal Presidente (vedi esempio)."
        ],
        [
            'id' => 2,
            'name' => 'palestra',
            'cover' => "/image/3.jpg",
            'info' => 'Interpretato da Matthew McConaughey, Anne Hathaway, Jessica Chastain e Michael Caine, il film narra di un gruppo di astronauti che viaggiano attraverso un wormhole in cerca di una nuova casa per lumanità. Nolan ha scritto la sceneggiatura assieme a suo fratello Jonathan, che per primo sviluppò il film nel 2007. Christopher Nolan ha inoltre prodotto il film insieme a sua moglie Emma Thomas e Lynda Obst. Il fisico teorico del Caltech Kip Thorne, uno dei maggiori esperti internazionali della teoria della relatività generale, è produttore esecutivo e ha contribuito al film come consulente scientifico.[2]'
        ],
        [
            'id' => 3,
            'name' => 'box',
            'cover' => "/image/3.jpg",
            'info' => "Il corso di Istruttore Fitness e Body Building online ha l'obiettivo di formare i nuovi professionisti della Sala Pesi. L'Istruttore di Sala Pesi svolge un ruolo fondamentale in palestre e centri fitness, dove si trova a lavorare con persone con gli obiettivi più diversi: dal dimagrimento all'ipertrofia muscolare. Saranno pertanto approfondite tutte le tematiche inerenti l'allenamento con un'analisi dettagliata degli esercizi, della meccanica muscolare e delle tecniche di allenamento finalizzate all'incremento della massa muscolare, della forza e del dimagrimento, ma anche gli aspetti necessari a realizzare una programmazione finalizzata a migliorare gli aspetti di forma generale e di prevenzione delle patologie connesse con la sedentarietà. In un corso di formazione per Istruttore Fitness e Body Building non può mancare un approfondimento sull'alimentazione e l'integrazione sportiva. La formazione a distanza NonSoloFitness prevede: l'invio del libro di testo (A scuola di Fitness), consultazione online di Video e Slide, accesso ad un Gruppo Facebook Privato, sessione con un docente NonSoloFitness su Skype / WhatsApp. Al termine del corso è previsto un esame, superato il quale verrà rilasciata la certificazione NonSoloFitness con riconoscimento AICS - EPS CONI (vedi esempio) e il Diploma Nazionale con Tesserino Tecnico corredato da foto e inserimento nell'Albo degli Istruttori e dei Tecnici. Come da normativa vigente il Diploma è emesso direttamente dall'EPS CONI e firmato dal Presidente (vedi esempio)."
        ],
        [
            'id' => 4,
            'name' => 'mma',
            'cover' => "/image/3.jpg",
            'info' => "Il corso di Istruttore Fitness e Body Building online ha l'obiettivo di formare i nuovi professionisti della Sala Pesi. L'Istruttore di Sala Pesi svolge un ruolo fondamentale in palestre e centri fitness, dove si trova a lavorare con persone con gli obiettivi più diversi: dal dimagrimento all'ipertrofia muscolare. Saranno pertanto approfondite tutte le tematiche inerenti l'allenamento con un'analisi dettagliata degli esercizi, della meccanica muscolare e delle tecniche di allenamento finalizzate all'incremento della massa muscolare, della forza e del dimagrimento, ma anche gli aspetti necessari a realizzare una programmazione finalizzata a migliorare gli aspetti di forma generale e di prevenzione delle patologie connesse con la sedentarietà. In un corso di formazione per Istruttore Fitness e Body Building non può mancare un approfondimento sull'alimentazione e l'integrazione sportiva. La formazione a distanza NonSoloFitness prevede: l'invio del libro di testo (A scuola di Fitness), consultazione online di Video e Slide, accesso ad un Gruppo Facebook Privato, sessione con un docente NonSoloFitness su Skype / WhatsApp. Al termine del corso è previsto un esame, superato il quale verrà rilasciata la certificazione NonSoloFitness con riconoscimento AICS - EPS CONI (vedi esempio) e il Diploma Nazionale con Tesserino Tecnico corredato da foto e inserimento nell'Albo degli Istruttori e dei Tecnici. Come da normativa vigente il Diploma è emesso direttamente dall'EPS CONI e firmato dal Presidente (vedi esempio)."
        ],
        [
            'id' => 5,
            'name' => 'yoga',
            'cover' => "/image/3.jpg",
            'info' => "Il corso di Istruttore Fitness e Body Building online ha l'obiettivo di formare i nuovi professionisti della Sala Pesi. L'Istruttore di Sala Pesi svolge un ruolo fondamentale in palestre e centri fitness, dove si trova a lavorare con persone con gli obiettivi più diversi: dal dimagrimento all'ipertrofia muscolare. Saranno pertanto approfondite tutte le tematiche inerenti l'allenamento con un'analisi dettagliata degli esercizi, della meccanica muscolare e delle tecniche di allenamento finalizzate all'incremento della massa muscolare, della forza e del dimagrimento, ma anche gli aspetti necessari a realizzare una programmazione finalizzata a migliorare gli aspetti di forma generale e di prevenzione delle patologie connesse con la sedentarietà. In un corso di formazione per Istruttore Fitness e Body Building non può mancare un approfondimento sull'alimentazione e l'integrazione sportiva. La formazione a distanza NonSoloFitness prevede: l'invio del libro di testo (A scuola di Fitness), consultazione online di Video e Slide, accesso ad un Gruppo Facebook Privato, sessione con un docente NonSoloFitness su Skype / WhatsApp. Al termine del corso è previsto un esame, superato il quale verrà rilasciata la certificazione NonSoloFitness con riconoscimento AICS - EPS CONI (vedi esempio) e il Diploma Nazionale con Tesserino Tecnico corredato da foto e inserimento nell'Albo degli Istruttori e dei Tecnici. Come da normativa vigente il Diploma è emesso direttamente dall'EPS CONI e firmato dal Presidente (vedi esempio)."
        ],
        [
            'id' => 6,
            'name' => 'karate',
            'cover' => "/image/3.jpg",
            'info' => "Il corso di Istruttore Fitness e Body Building online ha l'obiettivo di formare i nuovi professionisti della Sala Pesi. L'Istruttore di Sala Pesi svolge un ruolo fondamentale in palestre e centri fitness, dove si trova a lavorare con persone con gli obiettivi più diversi: dal dimagrimento all'ipertrofia muscolare. Saranno pertanto approfondite tutte le tematiche inerenti l'allenamento con un'analisi dettagliata degli esercizi, della meccanica muscolare e delle tecniche di allenamento finalizzate all'incremento della massa muscolare, della forza e del dimagrimento, ma anche gli aspetti necessari a realizzare una programmazione finalizzata a migliorare gli aspetti di forma generale e di prevenzione delle patologie connesse con la sedentarietà. In un corso di formazione per Istruttore Fitness e Body Building non può mancare un approfondimento sull'alimentazione e l'integrazione sportiva. La formazione a distanza NonSoloFitness prevede: l'invio del libro di testo (A scuola di Fitness), consultazione online di Video e Slide, accesso ad un Gruppo Facebook Privato, sessione con un docente NonSoloFitness su Skype / WhatsApp. Al termine del corso è previsto un esame, superato il quale verrà rilasciata la certificazione NonSoloFitness con riconoscimento AICS - EPS CONI (vedi esempio) e il Diploma Nazionale con Tesserino Tecnico corredato da foto e inserimento nell'Albo degli Istruttori e dei Tecnici. Come da normativa vigente il Diploma è emesso direttamente dall'EPS CONI e firmato dal Presidente (vedi esempio)."
        ],
        ];

    function homepage() {
        return view('homepage', ['corsi'=>self::$corsi]);
    }

    function dovesiamo() {
        return view('dovesiamo');
    }

    function struttura() {
        return view('struttura');
    }
    
    public  function corsi(){
        return view('corsi', ['corsi'=>self::$corsi]);
    }

    public function dettaglicorso($id){
        foreach(self::$corsi as $corso){
            if($corso['id']==$id){
                return view('dettaglicorso', ['corso'=>$corso]);
            }
        }
        abort(404);
    }

    
    function contatti() {
        return view('contatti');
    }
}
