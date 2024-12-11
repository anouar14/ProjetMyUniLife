import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/app.css';
import './scss1/app.scss';
import './scss1/_tables.scss'; // Optionnel, si vous voulez inclure vos styles spécifiques
import renderChart from './chart';  // Importer le fichier chart.js

// Exécutez la fonction pour afficher le graphique
renderChart();


console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');
