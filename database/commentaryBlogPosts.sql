SELECT authors.*,
       commentarys.*,
       articles.id
FROM commentarys
INNER JOIN authors ON authors.id = commentarys.AUTHOR_id
INNER JOIN articles ON articles.id = commentarys.ARTICLES_id
WHERE articles.id = :artID