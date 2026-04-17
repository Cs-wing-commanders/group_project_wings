<?php
$pageTitle = $pageTitle ?? 'Royal Nawab';
?>
<!DOCTYPE html>
<html lang="en" class="h-full scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($pageTitle); ?> · Royal Nawab</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500&family=DM+Sans:ital,wght@0,400;0,500;0,600;0,700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            display: ['"Cormorant Garamond"', 'Georgia', 'serif'],
            sans: ['"DM Sans"', 'system-ui', 'sans-serif'],
          },
          colors: {
            brand: { DEFAULT: '#b91c1c', dark: '#991b1b', deep: '#7f1d1d' },
          },
        },
      },
    };
  </script>
</head>
<body class="min-h-full bg-stone-50 text-stone-800 font-sans antialiased">
