SELECT *
FROM articles
         INNER JOIN authors ON authors.id = articles.AUTHOR_id
ORDER BY articles.id DESC
    LIMIT 10