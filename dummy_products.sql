-- Insert dummy products into the 'products' table
INSERT INTO `products` (`name`, `description`, `price`, `category`, `stock_quantity`, `sku`, `weight`, `dimensions`, `manufacturer`, `expiry_date`, `tags`, `created_at`, `updated_at`)
VALUES
('Product 1', 'Description for product 1', 19.99, 'Category 1', 100, 'SKU001', 1.5, '{"width":10,"height":20,"depth":5}', 'Manufacturer 1', '2025-12-31', '["tag1","tag2"]', NOW(), NOW()),
('Product 2', 'Description for product 2', 29.99, 'Category 2', 50, 'SKU002', 2.0, '{"width":15,"height":25,"depth":10}', 'Manufacturer 2', '2025-11-30', '["tag3","tag4"]', NOW(), NOW()),
('Product 3', 'Description for product 3', 39.99, 'Category 3', 75, 'SKU003', 3.0, '{"width":20,"height":30,"depth":15}', 'Manufacturer 3', '2025-10-31', '["tag5","tag6"]', NOW(), NOW()),
('Product 4', 'Description for product 4', 49.99, 'Category 1', 60, 'SKU004', 1.8, '{"width":12,"height":22,"depth":8}', 'Manufacturer 4', '2025-09-30', '["tag7","tag8"]', NOW(), NOW()),
('Product 5', 'Description for product 5', 59.99, 'Category 2', 40, 'SKU005', 2.5, '{"width":18,"height":28,"depth":12}', 'Manufacturer 5', '2025-08-31', '["tag9","tag10"]', NOW(), NOW()),
('Product 6', 'Description for product 6', 69.99, 'Category 3', 90, 'SKU006', 2.2, '{"width":14,"height":24,"depth":9}', 'Manufacturer 6', '2025-07-31', '["tag11","tag12"]', NOW(), NOW()),
('Product 7', 'Description for product 7', 79.99, 'Category 1', 30, 'SKU007', 1.9, '{"width":16,"height":26,"depth":11}', 'Manufacturer 7', '2025-06-30', '["tag13","tag14"]', NOW(), NOW()),
('Product 8', 'Description for product 8', 89.99, 'Category 2', 20, 'SKU008', 3.1, '{"width":22,"height":32,"depth":14}', 'Manufacturer 8', '2025-05-31', '["tag15","tag16"]', NOW(), NOW()),
('Product 9', 'Description for product 9', 99.99, 'Category 3', 25, 'SKU009', 2.8, '{"width":20,"height":30,"depth":10}', 'Manufacturer 9', '2025-04-30', '["tag17","tag18"]', NOW(), NOW()),
('Product 10', 'Description for product 10', 109.99, 'Category 1', 35, 'SKU010', 3.0, '{"width":25,"height":35,"depth":15}', 'Manufacturer 10', '2025-03-31', '["tag19","tag20"]', NOW(), NOW());

-- Insert dummy images into the 'product_images' table
INSERT INTO `product_images` (`product_id`, `image_path`, `created_at`, `updated_at`)
VALUES
(1, 'products/image1a.jpg', NOW(), NOW()),
(1, 'products/image1b.jpg', NOW(), NOW()),
(2, 'products/image2a.jpg', NOW(), NOW()),
(2, 'products/image2b.jpg', NOW(), NOW()),
(3, 'products/image3a.jpg', NOW(), NOW()),
(3, 'products/image3b.jpg', NOW(), NOW()),
(4, 'products/image4a.jpg', NOW(), NOW()),
(4, 'products/image4b.jpg', NOW(), NOW()),
(5, 'products/image5a.jpg', NOW(), NOW()),
(5, 'products/image5b.jpg', NOW(), NOW()),
(6, 'products/image6a.jpg', NOW(), NOW()),
(6, 'products/image6b.jpg', NOW(), NOW()),
(7, 'products/image7a.jpg', NOW(), NOW()),
(7, 'products/image7b.jpg', NOW(), NOW()),
(8, 'products/image8a.jpg', NOW(), NOW()),
(8, 'products/image8b.jpg', NOW(), NOW()),
(9, 'products/image9a.jpg', NOW(), NOW()),
(9, 'products/image9b.jpg', NOW(), NOW()),
(10, 'products/image10a.jpg', NOW(), NOW()),
(10, 'products/image10b.jpg', NOW(), NOW());

-- Insert dummy reviews into the 'reviews' table
INSERT INTO `reviews` (`product_id`, `review`, `rating`, `created_at`, `updated_at`)
VALUES
(1, 'Great product!', 5, NOW(), NOW()),
(1, 'Very useful and high quality.', 4, NOW(), NOW()),
(2, 'Not as expected.', 3, NOW(), NOW()),
(2, 'Good value for the price.', 4, NOW(), NOW()),
(3, 'Excellent!', 5, NOW(), NOW()),
(3, 'Will buy again.', 5, NOW(), NOW()),
(4, 'Average quality.', 3, NOW(), NOW()),
(4, 'Okay for the price.', 3, NOW(), NOW()),
(5, 'Love it!', 4, NOW(), NOW()),
(5, 'Highly recommended.', 5, NOW(), NOW()),
(6, 'Satisfied with the purchase.', 4, NOW(), NOW()),
(6, 'Could be better.', 3, NOW(), NOW()),
(7, 'Wonderful product.', 5, NOW(), NOW()),
(7, 'Exactly what I needed.', 4, NOW(), NOW()),
(8, 'Fantastic!', 5, NOW(), NOW()),
(8, 'Exceeded my expectations.', 5, NOW(), NOW()),
(9, 'Good quality, but pricey.', 4, NOW(), NOW()),
(9, 'Not bad.', 3, NOW(), NOW()),
(10, 'Perfect for my needs.', 5, NOW(), NOW()),
(10, 'Very pleased with this product.', 4, NOW(), NOW());
