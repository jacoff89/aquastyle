//import './bootstrap';
import './script.js';

// Подключаем все файлы из папки images (включая подпапки)
const images = import.meta.glob('../images/**/*', { eager: true });
