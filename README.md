### Aplicatie web de tip Agenda/calendar (Task_Organizer). 

Pagini:  
Conectare 
Inregistrare
Vizualizare profil
Adauga task
Lista taskuri. 

In cadrul aplicatiei s-a folosit: HTML5, CSS, PHP, sablonare, verificari atat pe HTML cat si pe PHP, adaugand mesajele de succes/eroare corespunzatoare, OOP, REST API.
Toate paginile contin un banner, un footer, un meniu de navigatie vertical, in partea stanga, iar in continuarea lui este afisat continutul paginii.

Descriere pagini pe scurt:

Conectare:
Formular de login 
Email
Parola

Inregistrare:
Formular de inregistrare
Nume
Prenume
Email
Parola

Vizualizare profil:
Poza de profil sau o poza default de tip ‘no profile pic’ (daca nu exista o poza salvata in baza de date)
O lista cu toate datele utilizatorului
Un formular pentru adaugarea pozei de profil

Adaugare task:
Formular pentru adaugarea taskului
Titlu
Data
Tip (dropdown: task, eveniment, reminder)
Descriere 

Lista taskuri
Formular dropdown cu cele 3 tipuri de taskuri, pentru a filtra taskurile dupa un anumit tip. 
Tabel cu toate taskurile pentru utilizatorul conectat – daca nu exista niciun task, se afiseaza un mesaj ‘NICIUN TASK SALVAT. ADAUGA UN TASK.’ 
Pentru fiecare task, buton de ‘Termina task’ pentru a schimba status-ul.

DESCRIERE DETALIATA PROIECT

Aplicatia are doua sectiuni, una pentru utilizator neconectat, una pentru utilizator conectat.

Atunci cand utilizatorul este neconectat, paginile aplicatiei web contin un banner si un meniu cu doua optiuni: Conectare si Inregistrare.

Un utilizator se poate inregistra prin completarea unui formular de inregistrare, iar datele acestuia se vor salva in baza de date. Email-ul trebuie sa fie unic, iar parola criptata.

Dupa inregistrare, utilizatorul se poate conecta, utilizand un formular de conectare si un buton de submit.
Daca conectarea este esuata, se va afisa un mesaj de eroare.
Daca conectarea este efectuata cu succes, se va deschide o sesiune, iar utilizatorul va fi redirectionat catre sectiunea pentru utilizator conectat.

Atunci cand utilizatorul este conectat, paginile aplicatiei web contin un banner si un meniu cu urmatoarele optiuni: Deconectare, Adauga task, Lista task-uri si Vizualizare profil.

La apasarea pe “Deconectare”, sesiunea va fi inchisa, iar utilizatorul va fi redirectionat catre pagina de conectare.

In pagina “Vizualizare profil” sunt afisate toate datele utilizatorului si poza de profil. In cazul in care campul poza_profil din baza de date nu este completat, se va afisa o poza default).
Tot in aceasta pagina exista un formular cu un singur input de tip file si un buton de submit. La trimiterea formularului, poza este salvata pe server, iar campul poza_profil din baza de date este actualizat, pentru utilizatorul conectat.

In pagina “Lista taskuri” sunt afisate toate task-urile intr-un tabel, iar daca nu exista niciun task, se afiseaza un mesaj ‘NICIUN TASK SALVAT. ADAUGA UN TASK.’ Textul ADAUGA UN TASK este o ancora care duce catre pagina de adaugare task. Pentru fiecare task ‘in asteptare’ exista si un buton ‘Termina task’ care actualizeaza statusul task-ului in baza de date.

In pagina “Adauga task” este un formular cu campurile: titlu, data, tip. La submit, se adauga o noua inregistrare in tabela task, cu status 0. Daca s-a adaugat task-ul cu success, se afiseaza un mesaj de succes, altfel un mesaj general de eroare.

Baza de date:
Utilizator – id PK, nume, prenume, email, parola, poza_profil
Task – id PK, titlu, data, tip, descriere, status (0 – in asteptare, 1 - terminat), id_utilizator FK

In aplicatie este integrat API-ul Quotes. 
Pe Home este afisat un citat aleator si categoria sa.
Pagina propune un citat contine un formular pentru adaugarea unui nou citat, prin intermediu endpoint-ului : /api/quote/create.php.

Pe Home este integrat si Bored API (https://www.boredapi.com/).
