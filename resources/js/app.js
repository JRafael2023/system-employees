import './bootstrap';

function toggleSidebar() {
  document.getElementById('sidebar').classList.toggle('active');
}

function navigate(section) {
  const title = document.getElementById('section-title');
  const content = document.getElementById('content');

  title.textContent = section.charAt(0).toUpperCase() + section.slice(1);

  // Aquí puedes cambiar el contenido dinámicamente
  switch (section) {
    case 'inicio':
      content.innerHTML = '<p>Bienvenido al panel de control.</p>';
      break;
    case 'usuarios':
      content.innerHTML = '<p>Gestión de usuarios aquí.</p>';
      break;
    case 'productos':
      content.innerHTML = '<p>Listado de productos disponibles.</p>';
      break;
    case 'reportes':
      content.innerHTML = '<p>Sección de reportes financieros.</p>';
      break;
    case 'configuracion':
      content.innerHTML = '<p>Opciones de configuración del sistema.</p>';
      break;
    default:
      content.innerHTML = '<p>Sección no encontrada.</p>';
  }

  // Cierra el sidebar en modo móvil
  const sidebar = document.getElementById('sidebar');
  if (window.innerWidth < 768) {
    sidebar.classList.remove('active');
  }
}

