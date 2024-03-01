CREATE TABLE IF NOT EXISTS todo (
    id INT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    done BOOLEAN NOT NULL DEFAULT FALSE
);

INSERT INTO todo (id, title, done) VALUES
    (1, 'Shopping', true),
    (2, 'Exercise', false),
    (3, 'Read a book', false),
    (4, 'Complete project', true),
    (5, 'Cook dinner', true),
    (6, 'Write article', false),
    (7, 'Call friend', true),
    (8, 'Study for exam', true),
    (9, 'Plan vacation', false),
    (10, 'Learn new language', true);
