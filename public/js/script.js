        // Slider functionality
        const slider = document.querySelector('.slider');
        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');
        const cards = document.querySelectorAll('.product-card');
        const cardWidth = cards[0].offsetWidth + 32; // Width + margin
        const visibleCards = Math.floor(slider.offsetWidth / cardWidth);
        
        let currentIndex = 0;
        let autoSlideInterval;
        
        function moveSlider() {
            slider.style.transform = `translateX(${currentIndex * cardWidth * -1}px)`;
        }
        
        function startAutoSlide() {
            autoSlideInterval = setInterval(() => {
                if (currentIndex < cards.length - visibleCards) {
                    currentIndex++;
                } else {
                    currentIndex = 0;
                }
                moveSlider();
            }, 5000);
        }
        
        function stopAutoSlide() {
            clearInterval(autoSlideInterval);
        }
        
        prevBtn.addEventListener('click', () => {
            stopAutoSlide();
            if (currentIndex > 0) {
                currentIndex--;
                moveSlider();
            }
            startAutoSlide();
        });
        
        nextBtn.addEventListener('click', () => {
            stopAutoSlide();
            if (currentIndex < cards.length - visibleCards) {
                currentIndex++;
                moveSlider();
            } else {
                currentIndex = 0;
                moveSlider();
            }
            startAutoSlide();
        });
        
        // Modal functionality
        const modal = document.getElementById('productModal');
        const closeModal = document.querySelector('.close-modal');
        const modalImage = document.getElementById('modal-image');
        const modalName = document.getElementById('modal-name');
        const modalDescription = document.getElementById('modal-description');
        const modalPrice = document.getElementById('modal-price');
        const modalStars = document.querySelectorAll('.modal-star');
        
        // Product data
        const products = [
            {
                name: 'حقيبة يمنية تقليدية',
                image: 'photos/b1.png',
                description: 'حقيبة يمنية تقليدية مصنوعة يدويًا من أجود أنواع الجلد الطبيعي، مزينة بنقوش ورسومات يمنية أصيلة. تتميز بألوانها الزاهية وتصميمها الفريد الذي يجمع بين التراث اليمني العريق واللمسة العصرية.',
                price: '$120.00',
                oldPrice: '$150.00',
                rating: 4
            },
            {
                name: 'حذاء يمني مطرز',
                image: 'photos/c1.png',
                description: 'حذاء يمني تقليدي مصنوع يدويًا بتطريز دقيق ومتقن. يجمع بين الأناقة والراحة، ويتميز بألوانه الزاهية ونقوشه التقليدية التي تعكس الإرث الثقافي اليمني.',
                price: '$85.00',
                oldPrice: '$100.00',
                rating: 5
            },
            {
                name: 'حقيبة يمنية تقليدية',
                image: 'photos/b2.png',
                description: 'عطر يمني فاخر مستخلص من أجود أنواع المسك والعود والعنبر. يتميز برائحته الشرقية الدافئة التي تدوم لساعات طويلة. معبأ في زجاجة أنيقة مزخرفة بنقوش يمنية تقليدية.',
                price: '$65.00',
                oldPrice: '$80.00',
                rating: 3
            },
            {
                name: 'إكسسوارات فضية يمنية',
                image: 'photos/e1.png',
                description: 'مجموعة إكسسوارات فضية يمنية مصنوعة يدويًا بحرفية عالية. تتضمن أساور، خواتم، وقلادات مزينة بنقوش يمنية تقليدية وأحجار كريمة. تعكس الفن اليمني العريق والتصاميم الفريدة.',
                price: '$95.00',
                oldPrice: '$120.00',
                rating: 4
            },
            {
                name: 'حقيبة يمنية تقليدية',
                image: 'photos/b3.png',
                description: 'شال يمني تقليدي مصنوع من أجود أنواع القطن ومطرز يدويًا بنقوش وزخارف يمنية أصيلة. يتميز بألوانه الزاهية وتصميمه الفريد الذي يناسب مختلف المناسبات.',
                price: '$55.00',
                oldPrice: '$70.00',
                rating: 4
            },
            {
                name: 'حقيبة يمنية تقليدية',
                image: 'ephotos/e2.png',
                description: 'ثوب يمني تقليدي مصنوع من أجود أنواع الأقمشة ومطرز يدويًا بتصاميم تقليدية. يتميز بألوانه الزاهية ونقوشه الدقيقة التي تعكس الثقافة اليمنية العريقة.',
                price: '$150.00',
                oldPrice: '$180.00',
                rating: 3
            }
        ];
        
        // Open modal when clicking on a product card
        cards.forEach((card, index) => {
            card.addEventListener('click', () => {
                const product = products[index];
                modalImage.src = product.image;
                modalName.textContent = product.name;
                modalDescription.textContent = product.description;
                modalPrice.textContent = product.price;
                document.getElementById('modal-old-price').textContent = product.oldPrice;
                
                // Set rating in modal
                modalStars.forEach((star, i) => {
                    if (i < product.rating) {
                        star.classList.add('active');
                        star.style.color = '#fbbf24';
                    } else {
                        star.classList.remove('active');
                        star.style.color = '#d1d5db';
                    }
                });
                
                modal.style.display = 'block';
            });
        });
        
        // Close modal
        closeModal.addEventListener('click', () => {
            modal.style.display = 'none';
        });
        
        // Close modal when clicking outside
        window.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.style.display = 'none';
            }
        });
        
        // Star rating functionality in modal
        modalStars.forEach(star => {
            star.addEventListener('click', () => {
                const index = parseInt(star.getAttribute('data-index'));
                const cardIndex = currentIndex;
                
                // Update modal stars
                modalStars.forEach((s, i) => {
                    if (i < index) {
                        s.classList.add('active');
                        s.style.color = '#fbbf24';
                    } else {
                        s.classList.remove('active');
                        s.style.color = '#d1d5db';
                    }
                });
                
                // Update card stars
                const cardStars = cards[cardIndex].querySelectorAll('.star');
                cardStars.forEach((s, i) => {
                    if (i < index) {
                        s.classList.add('active');
                        s.style.color = '#fbbf24';
                    } else {
                        s.classList.remove('active');
                        s.style.color = '#d1d5db';
                    }
                });
                
                // Update rating text
                const ratingText = cards[cardIndex].querySelector('.text-sm');
                ratingText.textContent = `(${index}.0)`;
                
                // Update product data
                products[cardIndex].rating = index;
            });
        });
        
        // Start automatic slider
        startAutoSlide();
        
        // Responsive behavior
        window.addEventListener('resize', () => {
            const newVisibleCards = Math.floor(slider.offsetWidth / cardWidth);
            if (currentIndex > cards.length - newVisibleCards) {
                currentIndex = cards.length - newVisibleCards;
                moveSlider();
            }
        });