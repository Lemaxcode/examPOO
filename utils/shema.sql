use moto;
CREATE TABLE moto (
    id INT PRIMARY KEY,
    brand VARCHAR(255),
    model VARCHAR(255),
    type VARCHAR(255),
    price FLOAT,
    image VARCHAR(255)
);
-- Ajout de la première moto
INSERT INTO moto (brand, model, type, price, image)
VALUES ('Yamaha', 'WR250F', 'Enduro', 8000.00, 'https://images.netdirector.co.uk/gforces-auto/image/upload/w_620,h_465,q_auto,c_fill,f_auto,fl_lossy/auto-client/2c7fd497b0029eecbe7de3b927d764d7/2022_yam_yzf1000r1spl_eu_bwm2_stu_001_03_1.jpg');

-- Ajout de la deuxième moto
INSERT INTO moto (brand, model, type, price, image)
VALUES ('Harley-Davidson', 'Street 750', 'Custom', 7500.00, 'https://images.netdirector.co.uk/gforces-auto/image/upload/w_620,h_465,q_auto,c_fill,f_auto,fl_lossy/auto-client/2c7fd497b0029eecbe7de3b927d764d7/2022_yam_yzf1000r1spl_eu_bwm2_stu_001_03_1.jpg');

-- Ajout de la troisième moto
INSERT INTO moto (brand, model, type, price, image)
VALUES ('Kawasaki', 'Ninja ZX-6R', 'Sportive', 10000.00, 'https://images.netdirector.co.uk/gforces-auto/image/upload/w_620,h_465,q_auto,c_fill,f_auto,fl_lossy/auto-client/2c7fd497b0029eecbe7de3b927d764d7/2022_yam_yzf1000r1spl_eu_bwm2_stu_001_03_1.jpg');

-- Ajout de la quatrième moto
INSERT INTO moto (brand, model, type, price, image)
VALUES ('BMW', 'S 1000 R', 'Roadster', 12000.00, 'https://images.netdirector.co.uk/gforces-auto/image/upload/w_620,h_465,q_auto,c_fill,f_auto,fl_lossy/auto-client/2c7fd497b0029eecbe7de3b927d764d7/2022_yam_yzf1000r1spl_eu_bwm2_stu_001_03_1.jpg');

