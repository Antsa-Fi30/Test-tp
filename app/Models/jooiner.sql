SELECT books.id, books.title, authors.name AS author_name, books.stocked_date
FROM books
JOIN authors ON books.authors_id = authors.id;

SELECT cart.id, cart.client, cart.borrowed_at, cart.return_at, books.title
FROM cart
JOIN books ON cart.books_id = books.id;