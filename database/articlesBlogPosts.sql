SELECT *
FROM articles
INNER JOIN authors ON authors.id = articles.AUTHOR_id
WHERE articles.id = :artID