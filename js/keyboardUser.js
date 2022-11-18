// Add keyboard-user class for styling focus states when user tabs down
function handleFirstTab(e) {
  if (e.key === 'Tab') {
    document.body.classList.add('keyboard-user');
    window.removeEventListener('keydown', handleFirstTab);
  }
}

window.addEventListener('keydown', handleFirstTab);
