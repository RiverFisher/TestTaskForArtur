SELECT a.id
    FROM A a
    LEFT JOIN B b ON a.id = b.id
    WHERE b.id IS NULL
    AND a.id > 0
    ORDER BY a.id

SELECT a.id
    FROM  B b
    RIGHT OUTER JOIN A a ON b.id = a.id
    WHERE b.id IS NULL
    AND a.id > 0
    ORDER BY a.id

SELECT id FROM a WHERE id > 0
EXCEPT
SELECT id FROM b WHERE id > 0
