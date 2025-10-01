# ✨ EX - Setup Laravel Portfolio  

## 📌 PARTE 1:  
### 📝 Descrizione  
**Nome repo:** `laravel-portfolio`  

Questo esercizio inizia oggi e lo continueremo fino alla fine del corso per creare passo dopo passo il nostro **portfolio online**! 🚀  

---

### 🔧 Svolgimento  
Per oggi, dedichiamoci alla creazione del nostro portfolio, mettendo su un'app **Laravel** provvista di autenticazione grazie a **Breeze**.  

1. ⚡ Avviamo l'installazione di **Laravel**  
2. 📦 Installiamo **Breeze** e **Bootstrap**  
3. ✅ Verifichiamo che l'autenticazione funzioni  
4. 🎨 Creiamo un layout per la nostra area **admin**  

---

## 📌 PARTE 2:  
### 📝 Descrizione  
**Nome repo:** `laravel-portfolio`  

Ora inseriamo la nostra prima entità: il **Progetto** 💻  

---

### 🔧 Svolgimento  
L'obiettivo di oggi è quello di iniziare a preparare il **back-office** per poter gestire i progetti nel nostro sito portfolio.  

1. 🛠️ Creiamo il modello **Project**, con relativa migrazione ed un **seeder** per inserire inizialmente alcuni progetti nel Database  
2. ⚙️ Prepariamo un **Resource Controller** (`Admin/ProjectController`) incaricato di gestire tutte le operazioni **CRUD** sui progetti  
3. 🔍 Soffermiamoci per oggi solo sulla logica delle azioni di **index** e **show**  
4. 📑 Creiamo le **rotte** per i nostri progetti e prepariamo un layout per mostrare i nostri progetti in **tabella** nella rotta **index**  
5. 🎨 Inventiamo anche uno **stile** per la pagina di **show**, che dovrà mostrare un singolo progetto  

---

## 📌 PARTE 3:  
### 📝 Descrizione  
**Nome repo:** `laravel-portfolio`  

Oggi termineremo le operazioni **CRUD** sui progetti, dando la possibilità all'utente di creare nuovi progetti, modificare quelli esistenti o eliminarli. 🖋️🗑️  

---

### 🔧 Svolgimento  
Procediamo al completamento delle operazioni **CRUD** sul modello **Project**:  

1. 🌐 Prepariamo le **rotte** per le pagine di creazione e modifica dei progetti  
2. 📝 All'interno delle pagine, prepariamo i rispettivi **form**  
3. 📂 Nella pagina di dettaglio del progetto, mostriamo la **tipologia** a cui il progetto appartiene (Web Design, Graphic Design, Back End...)  
4. ⚙️ Nel controller, inseriamo la logica per il **salvataggio**, la **modifica** e l’**eliminazione** di un progetto  
5. 📊 Nella tabella della pagina **index**, inseriamo i **pulsanti** su ciascuna riga per eliminare o modificare il singolo progetto. Inoltre, possiamo avere un singolo tasto in cima che porti alla pagina di creazione del progetto  

---

### 🎁 Bonus  
Proviamo ad aggiungere un **controllo di conferma**: quando l'utente clicca sul pulsante "delete", chiediamo conferma della cancellazione prima di eliminare l'elemento.  
Questa operazione può essere fatta con **JavaScript** oppure usando i componenti di **Bootstrap**. ⚡
