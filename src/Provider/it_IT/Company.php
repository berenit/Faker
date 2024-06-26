<?php

namespace Faker\Provider\it_IT;

use Faker\Calculator\Luhn;

class Company extends \Faker\Provider\Company
{
    protected static $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}-{{lastName}} {{companySuffix}}',
        '{{lastName}}, {{lastName}} e {{lastName}} {{companySuffix}}',
    ];

    protected static $catchPhraseWords = [
        [
            'Abilità', 'Access', 'Adattatore', 'Algoritmo', 'Alleanza', 'Analizzatore', 'Applicazione', 'Approccio', 'Architettura', 'Archivio', 'Intelligenza artificiale', 'Array', 'Attitudine', 'Benchmark', 'Capacità', 'Sfida', 'Circuito', 'Collaborazione', 'Complessità', 'Concetto', 'Conglomerato', 'Contingenza', 'Core', 'Database', 'Data-warehouse', 'Definizione', 'Emulazione', 'Codifica', 'Criptazione', 'Firmware', 'Flessibilità', 'Previsione', 'Frame', 'framework', 'Funzione', 'Funzionalità', 'Interfaccia grafica', 'Hardware', 'Help-desk', 'Gerarchia', 'Hub', 'Implementazione', 'Infrastruttura', 'Iniziativa', 'Installazione', 'Set di istruzioni', 'Interfaccia', 'Soluzione internet', 'Intranet', 'Conoscenza base', 'Matrici', 'Matrice', 'Metodologia', 'Middleware', 'Migrazione', 'Modello', 'Moderazione', 'Monitoraggio', 'Moratoria', 'Rete', 'Architettura aperta', 'Sistema aperto', 'Orchestrazione', 'Paradigma', 'Parallelismo', 'Policy', 'Portale', 'Struttura di prezzo', 'Prodotto', 'Produttività', 'Progetto', 'Proiezione', 'Protocollo', 'Servizio clienti', 'Software', 'Soluzione', 'Standardizzazione', 'Strategia', 'Struttura', 'Successo', 'Sovrastruttura', 'Supporto', 'Sinergia', 'Task-force', 'Finestra temporale', 'Strumenti', 'Utilizzazione', 'Sito web', 'Forza lavoro',
        ],
        [
            'adattiva', 'avanzata', 'migliorata', 'assimilata', 'automatizzata', 'bilanciata', 'centralizzata', 'compatibile', 'configurabile', 'cross-platform', 'decentralizzata', 'digitalizzata', 'distribuita', 'piccola', 'ergonomica', 'esclusiva', 'espansa', 'estesa', 'configurabile', 'fondamentale', 'orizzontale', 'implementata', 'innovativa', 'integrata', 'intuitiva', 'inversa', 'gestita', 'obbligatoria', 'monitorata', 'multi-canale', 'multi-laterale', 'open-source', 'operativa', 'ottimizzata', 'organica', 'persistente', 'polarizzata', 'proattiva', 'programmabile', 'progressiva', 'reattiva', 'riallineata', 'ricontestualizzata', 'ridotta', 'robusta', 'sicura', 'condivisibile', 'stand-alone', 'switchabile', 'sincronizzata', 'sinergica', 'totale', 'universale', 'user-friendly', 'versatile', 'virtuale', 'visionaria',
        ],
        [
            '24 ore', '24/7', 'terza generazione', 'quarta generazione', 'quinta generazione', 'sesta generazione', 'asimmetrica', 'asincrona', 'background', 'bi-direzionale', 'biforcata', 'bottom-line', 'coerente', 'coesiva', 'composita', 'sensibile al contesto', 'basta sul contesto', 'basata sul contenuto', 'dedicata', 'didattica', 'direzionale', 'discreta', 'dinamica', 'eco-centrica', 'esecutiva', 'esplicita', 'full-range', 'globale', 'euristica', 'alto livello', 'olistica', 'omogenea', 'ibrida', 'impattante', 'incrementale', 'intangibile', 'interattiva', 'intermediaria', 'locale', 'logistica', 'massimizzata', 'metodica', 'mission-critical', 'mobile', 'modulare', 'motivazionale', 'multimedia', 'multi-tasking', 'nazionale', 'neutrale', 'nextgeneration', 'non-volatile', 'object-oriented', 'ottima', 'ottimizzante', 'radicale', 'real-time', 'reciproca', 'regionale', 'responsiva', 'scalabile', 'secondaria', 'stabile', 'statica', 'sistematica', 'sistemica', 'tangibile', 'terziaria', 'uniforme', 'valore aggiunto',
        ],
    ];

    protected static $bsWords = [
        [
            'partnerships', 'comunità', 'ROI', 'soluzioni', 'e-services', 'nicchie', 'tecnologie', 'contenuti', 'supply-chains', 'convergenze', 'relazioni', 'architetture', 'interfacce', 'mercati', 'e-commerce', 'sistemi', 'modelli', 'schemi', 'reti', 'applicazioni', 'metriche', 'e-business', 'funzionalità', 'esperienze', 'webservices', 'metodologie',
        ],
        [
            'implementate', 'utilizzo', 'integrate', 'ottimali', 'evolutive', 'abilitate', 'reinventate', 'aggregate', 'migliorate', 'incentivate', 'monetizzate', 'sinergizzate', 'strategiche', 'deploy', 'marchi', 'accrescitive', 'target', 'sintetizzate', 'spedizioni', 'massimizzate', 'innovazione', 'guida', 'estensioni', 'generate', 'exploit', 'transizionali', 'matrici', 'ricontestualizzate',
        ],
        [
            'valore aggiunto', 'verticalizzate', 'proattive', 'forti', 'rivoluzionari', 'scalabili', 'innovativi', 'intuitivi', 'strategici', 'e-business', 'mission-critical', '24/7', 'globali', 'B2B', 'B2C', 'granulari', 'virtuali', 'virali', 'dinamiche', 'magnetiche', 'web', 'interattive', 'sexy', 'back-end', 'real-time', 'efficienti', 'front-end', 'distributivi', 'estensibili', 'mondiali', 'open-source', 'cross-platform', 'sinergiche', 'out-of-the-box', 'enterprise', 'integrate', 'di impatto', 'wireless', 'trasparenti', 'next-generation', 'cutting-edge', 'visionari', 'plug-and-play', 'collaborative', 'olistiche', 'ricche',
        ],
    ];

    protected static $jobTitleFormat = [
        'Marinai esperti', 'Responsabile contabilità', 'Contabile', 'Attore', 'Amministratore', 'Responsabile dei servizi amministrativi', 'Responsabile pubblicità o responsabile promozioni', 'Agente di vendita pubblicitaria', 'Ingegnere aerospaziale', 'Responsabile aziendale agricolo', 'Lavoratore agricolo', 'Ingegnere agricolo', 'Operatore di attrezzature agricole', 'Ispettore agricolo', 'Responsabile agricolo', 'Classificatore e selezionatore di prodotti agricoli', 'Rappresentante di vendita agricolo', 'Tecnico di scienze agrarie', 'Insegnante di scienze agrarie', 'Tecnico agricolo', 'Lavoratore agricolo', 'Membro dell\'equipaggio aereo',
        'Ufficiale dell\'equipaggio aereo', 'Controllore del traffico aereo', 'Assemblatore di aeromobili', 'Riparatore di carrozzerie di aeromobili', 'Supervisore del carico aereo', 'Specialista di motori di aeromobili', 'Ufficiale di lancio e recupero di aeromobili', 'Specialista di lancio di aeromobili', 'Meccanico di aeromobili o tecnico dei servizi aerei', 'Assemblatori di strutture aeronautiche', 'Specialista delle operazioni aeroportuali', 'Pilota di linea o copilota o ingegnere di volo', 'Sviluppatore di algoritmi', 'Sarto', 'Autista di ambulanza', 'Anestesista', 'Allevatore di animali', 'Lavoratore per la cura degli animali', 'Operatore di controllo degli animali',
        'Lavoratore nell\'allevamento di animali', 'Addestratore di animali', 'Annunciatore', 'Antropologo', 'Antropologo o archeologo', 'Insegnante di antropologia', 'Riparatore di elettrodomestici', 'Arbitro', 'Archeologo', 'Architetto', 'Disegnatore architettonico',v'Disegnatore architettonico o civile', 'Insegnante di architettura',  'Ufficiale di veicolo d\'assalto blindato', 'Direttore artistico', 'Insegnante di arte', 'Membro dell\'equipaggio di artiglieria', 'Artista', 'Assemblatore', 'Perito', 'Astronomo', 'Allenatore sportivo', 'Scienziato atmosferico e spaziale', 'Tecnico di attrezzature audio e video', 'Revisore contabile', 'Carrozziere',
        'Installatori di vetri auto', 'Meccanico di automobili', 'Ispettore dell\'aviazione', 'Tecnico avionico', 'Ufficiale giudiziario', 'Fornaio', 'Barbiere', 'Barista', 'Assistente barista', 'Riparatore di batterie', 'Facchino', 'Gioielliere', 'Ciclista', 'Operatore di macchine per legatoria', 'Lavoratore in legatoria', 'Biochimico', 'Insegnante di scienze biologiche', 'Tecnico biologico', 'Biologo', 'Ingegnere biomedico', 'Biofisico', 'Costruttore di barche e cantieri navali', 'Idraulico', 'Rilegatore di libri', 'Contabile', 'Costruttore di barriere', 'Brasatore', 'Operatore di macchina per brasatura', 'Muratore', 'Tecnico broadcast', 'Impiegato di brokeraggio',
        'Analista di bilancio', 'Operatore di lucidatura e smussatura', 'Lavoratore per la pulizia degli edifici', 'Ispettore degli edifici', 'Operatore di bulldozer', 'Autista di autobus', 'Responsabile dello sviluppo aziendale', 'Responsabile aziendale', 'Specialista delle operazioni aziendali', 'Macellaio', 'Falegname', 'Cuoco di mensa', 'Tecnico di calibrazione o tecnico di strumentazione', 'Operatore di telecamera', 'Riparatore di telecamere', 'Scrittore di sottotitoli', 'Consigliere professionale', 'Carpentiere', 'Assemblatore e riparatore di carpenteria', 'Installatore di moquette', 'Cartografo', 'Fumettista', 'Scultore', 'Cassiere', 'Operatore di macchina per colata',
        'Addetto alla configurazione della macchina per colata', 'Installatore di piastrelle da soffitto', 'Muratore di cemento e finitore di calcestruzzo', 'Installatori di centralini e PBX', 'Operatore di centrale', 'CEO', 'CFO', 'Chef', 'Ingegnere chimico', 'Controllore di attrezzature chimiche', 'Operatore di attrezzature chimiche', 'Addetto alle attrezzature chimiche', 'Operatore di impianto chimico', 'Tecnico chimico', 'Chimico', 'Insegnante di chimica', 'Cura dei bambini', 'Assistente per la cura dei bambini', 'Chiropratico', 'Coreografo', 'Assistente alla pianificazione urbana', 'Disegnatore civile', 'Ingegnere civile', 'Tecnico di ingegneria civile',
        'Addetti alla pulizia dei veicoli', 'Impiegato', 'Tecnico di laboratorio clinico', 'Psicologo clinico', 'Psicologo scolastico clinico', 'Allenatori e scout', 'Operatore di macchina di rivestimento', 'Avvolgitori di bobine', 'Designer commerciale e industriale', 'Sommozzatore', 'Pilota commerciale', 'Riparatore di apparecchiature di comunicazione', 'Lavoratore di apparecchiature di comunicazione', 'Operatore di apparecchiature di comunicazione', 'Insegnante di comunicazioni', 'Responsabile dei servizi comunitari', 'Operatore di macchina di compattazione', 'Compositore', 'Informatico', 'Ingegnere hardware informatico', 'Operatore informatico',
        'Programmatore informatico', 'Tecnico informatico', 'Insegnante di scienze informatiche', 'Specialista della sicurezza informatica', 'Ingegnere software informatico', 'Specialista informatico', 'Specialista del supporto informatico', 'Analista programmatore', 'Operatore di macchine utensili a controllo numerico', 'Carpentiere edile', 'Perforatore edile', 'Operatore di attrezzature edili', 'Lavoratore edile', 'Responsabile edile', 'Operatore di macchina per l\'estrazione continua', 'Installatore di valvole di controllo', 'Operatore di nastro trasportatore', 'Cuoco', 'Operatore di attrezzature di raffreddamento e congelamento', 'Operatore di macchina per copie',
        'Medico legale', 'Formatore aziendale', 'Agente di custodia', 'Impiegato di corrispondenza', 'Assistente per i costumi', 'Psicologo', 'Consulente', 'Cancelliere del tribunale', 'Reporter', 'Specialista di credito', 'Responsabile del credito', 'Analista di credito', 'Addetto ai crediti e alla riscossione', 'Addetto alla riscossione dei crediti', 'Analista della gestione delle crisi', 'Coordinatore della gestione delle crisi', 'Specialista della gestione delle crisi', 'Membro dell\'equipaggio navale', 'Ingegnere elettrico navale', 'Assistente di servizi cliente', 'Rappresentante del servizio clienti', 'Tagliatore di cuoio e pellame', 'Operatore di taglio e affilatura',
        'Operatore di macchina di taglio e affilatura', 'Analista del supporto ai clienti', 'Operatore di macchina per il taglio e la smussatura', 'Operatore di macchina per il taglio e la sagomatura', 'Riparatore di cavi', 'Installatore di cavi', 'Falegname finito', 'Serramentista', 'Data scientist', 'Supervisore di data scientist', 'Analista di data scientist', 'Tecnico di elaborazione dati',
        'Operatore di macchina di elaborazione dati', 'Analista di elaborazione dati', 'Tecnico di elaborazione dati', 'Operatore di input di dati', 'Direttore della gestione dati', 'Dattilografo', 'Analista di database', 'Amministratore di database', 'Sviluppatore di database', 'Responsabile del database', 'Progettista di mobili', 'Riparatore di mobili', 'Disegnatore di mobili'
    ];

    protected static $companySuffix = ['SPA', 'e figli', 'Group', 's.r.l.'];

    /**
     * @example 'Robust full-range hub'
     */
    public function catchPhrase()
    {
        $result = [];

        foreach (static::$catchPhraseWords as &$word) {
            $result[] = static::randomElement($word);
        }

        return implode(' ', $result);
    }

    /**
     * @example 'integrate extensible convergence'
     */
    public function bs()
    {
        $result = [];

        foreach (static::$bsWords as &$word) {
            $result[] = static::randomElement($word);
        }

        return implode(' ', $result);
    }

    /**
     * Italian VAT number (partita IVA)
     *
     * @see https://it.wikipedia.org/wiki/Partita_IVA
     *
     * @return string
     */
    public static function vat()
    {
        $code = sprintf('%s%03d', static::numerify('#######'), self::numberBetween(1, 121));

        return sprintf('IT%s%d', $code, Luhn::computeCheckDigit($code));
    }

    /**
     * Italian VAT number (partita IVA)
     *
     * @return string
     *
     * @deprecated use {@link \Faker\Provider\it_IT\Company::vat()} instead
     * @see \Faker\Provider\it_IT\Company::vat()
     */
    public static function vatId()
    {
        return self::vat();
    }
}
