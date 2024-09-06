<?php

namespace App\Controllers;

use App\Models\BookModel;
use App\Models\BorrowModel;

class BorrowController extends BaseController
{
    private $model;
    private $modelB;

    public function __construct()
    {
        $this->model = new BorrowModel();
        $this->modelB = new BookModel();
    }

    public function index()
    {
        $data['items'] = $this->model->getBooks();

        return view('/borrows/index', $data);
    }

    /**
     * Operation Create de l'entite Borrow qui se fait dans le partie Book pour le client
     */

    public function addToCart($id)
    {
        $user = session()->get('id');
        $return = $this->request->getPost('return_at');


        $data = [
            'book_id' => $id,
            'user_id' =>  $user,
            'borrowed_at' => date('Y-m-d H:i:s'),
            'return_at' => $return
        ];

        $this->model->save($data);

        $this->modelB->update($id, ['dispo' => 0]);
        return redirect()->to('/books');
    }

    /**
     * Ramène l'utilisateur dans une formulaire de confirmation de date de retour
     * @param number id;
     */
    public function editconfirm($id)
    {
        $data['borrow'] = $this->model->find($id);
        $data['borrow']['return_at'] = date('Y-m-d', strtotime($data['borrow']['return_at']));

        return view('borrows/edit_confirm', $data);
    }

    /**
     * Sauvegarde les modifications de la date
     * @param number id;
     * 
     */
    public function editupdate($id)
    {
        $user = session()->get('id');
        $returnd = $this->request->getPost('return_at');

        $data = [
            'return_at' => $returnd
        ];

        $this->model->update($id, $data);
        return redirect()->to('/borrowedList');
    }

    /**
     * Supprime de la panier les livres rendus et qui les rends disponibles
     * @param number id;
     * 
     * Recherche l'id du book avant de supprimer
     */
    public function deleteToCart($id)
    {
        $borrow = $this->model->find($id);
        if ($borrow) {
            $book = $borrow['book_id'];

            $bookModel = new BookModel();
            $bookModel->update($book, ['dispo' => 1]);
            $this->model->delete($id);
        }

        return redirect()->to('/borrowedList');
    }
}
