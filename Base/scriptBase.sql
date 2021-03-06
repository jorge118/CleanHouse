USE [master]
GO
/****** Object:  Database [CleanHouse]    Script Date: 27/03/2019 11:53:21 ******/
CREATE DATABASE [CleanHouse]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'CleanHouse', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL12.SQLEXPRESS\MSSQL\DATA\CleanHouse.mdf' , SIZE = 4288KB , MAXSIZE = UNLIMITED, FILEGROWTH = 1024KB )
 LOG ON 
( NAME = N'CleanHouse_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL12.SQLEXPRESS\MSSQL\DATA\CleanHouse_log.ldf' , SIZE = 1072KB , MAXSIZE = 2048GB , FILEGROWTH = 10%)
GO
ALTER DATABASE [CleanHouse] SET COMPATIBILITY_LEVEL = 120
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [CleanHouse].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [CleanHouse] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [CleanHouse] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [CleanHouse] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [CleanHouse] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [CleanHouse] SET ARITHABORT OFF 
GO
ALTER DATABASE [CleanHouse] SET AUTO_CLOSE ON 
GO
ALTER DATABASE [CleanHouse] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [CleanHouse] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [CleanHouse] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [CleanHouse] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [CleanHouse] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [CleanHouse] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [CleanHouse] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [CleanHouse] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [CleanHouse] SET  ENABLE_BROKER 
GO
ALTER DATABASE [CleanHouse] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [CleanHouse] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [CleanHouse] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [CleanHouse] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [CleanHouse] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [CleanHouse] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [CleanHouse] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [CleanHouse] SET RECOVERY SIMPLE 
GO
ALTER DATABASE [CleanHouse] SET  MULTI_USER 
GO
ALTER DATABASE [CleanHouse] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [CleanHouse] SET DB_CHAINING OFF 
GO
ALTER DATABASE [CleanHouse] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [CleanHouse] SET TARGET_RECOVERY_TIME = 0 SECONDS 
GO
ALTER DATABASE [CleanHouse] SET DELAYED_DURABILITY = DISABLED 
GO
USE [CleanHouse]
GO
/****** Object:  Table [dbo].[Cliente]    Script Date: 27/03/2019 11:53:21 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Cliente](
	[idCliente] [int] IDENTITY(1001,1) NOT NULL,
	[idPersona] [int] NULL,
	[idUsuario] [int] NULL,
	[estatus] [int] NULL,
PRIMARY KEY CLUSTERED 
(
	[idCliente] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[EmpleadoLimpieza]    Script Date: 27/03/2019 11:53:21 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[EmpleadoLimpieza](
	[idEmpleado] [int] IDENTITY(1001,1) NOT NULL,
	[certificadoProfesion] [binary](1) NULL,
	[CURP] [binary](1) NULL,
	[idPersona] [int] NULL,
	[idUsuario] [int] NULL,
	[estatus] [int] NULL,
PRIMARY KEY CLUSTERED 
(
	[idEmpleado] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Persona]    Script Date: 27/03/2019 11:53:21 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Persona](
	[idPersona] [int] IDENTITY(1001,1) NOT NULL,
	[nombre] [varchar](25) NULL,
	[apellidos] [varchar](50) NULL,
	[domicilio] [varchar](50) NULL,
 CONSTRAINT [PK__Persona__A47881410E84175F] PRIMARY KEY CLUSTERED 
(
	[idPersona] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[ServiciosLimpieza]    Script Date: 27/03/2019 11:53:21 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[ServiciosLimpieza](
	[idServicio] [int] IDENTITY(1001,1) NOT NULL,
	[nombreServicio] [varchar](25) NULL,
	[descripcion] [varchar](50) NULL,
	[costo] [decimal](18, 0) NULL,
PRIMARY KEY CLUSTERED 
(
	[idServicio] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[SolicitudServicio]    Script Date: 27/03/2019 11:53:21 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[SolicitudServicio](
	[idSolicitud] [int] IDENTITY(1001,1) NOT NULL,
	[idServicio] [int] NULL,
	[fechaServicio] [date] NULL,
	[horaServicio] [datetime] NULL,
	[direccion] [varchar](50) NULL,
	[idCliente] [int] NULL,
	[idEmpleado] [int] NULL,
PRIMARY KEY CLUSTERED 
(
	[idSolicitud] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Usuario]    Script Date: 27/03/2019 11:53:21 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Usuario](
	[idUsuario] [int] IDENTITY(1001,1) NOT NULL,
	[usuario] [varchar](10) NULL,
	[correo] [nvarchar](50) NULL,
	[contrasena] [nvarchar](20) NULL,
	[tipoUsuario] [varchar](10) NULL,
	[idPersona] [int] NULL,
 CONSTRAINT [PK__Usuario__645723A6A4E6B50E] PRIMARY KEY CLUSTERED 
(
	[idUsuario] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
ALTER TABLE [dbo].[Cliente]  WITH CHECK ADD  CONSTRAINT [fk_idPersona2] FOREIGN KEY([idPersona])
REFERENCES [dbo].[Persona] ([idPersona])
GO
ALTER TABLE [dbo].[Cliente] CHECK CONSTRAINT [fk_idPersona2]
GO
ALTER TABLE [dbo].[Cliente]  WITH CHECK ADD  CONSTRAINT [fk_idUsuario] FOREIGN KEY([idUsuario])
REFERENCES [dbo].[Usuario] ([idUsuario])
GO
ALTER TABLE [dbo].[Cliente] CHECK CONSTRAINT [fk_idUsuario]
GO
ALTER TABLE [dbo].[EmpleadoLimpieza]  WITH CHECK ADD  CONSTRAINT [fk_idPersona3] FOREIGN KEY([idPersona])
REFERENCES [dbo].[Persona] ([idPersona])
GO
ALTER TABLE [dbo].[EmpleadoLimpieza] CHECK CONSTRAINT [fk_idPersona3]
GO
ALTER TABLE [dbo].[EmpleadoLimpieza]  WITH CHECK ADD  CONSTRAINT [fk_idUsuario3] FOREIGN KEY([idUsuario])
REFERENCES [dbo].[Usuario] ([idUsuario])
GO
ALTER TABLE [dbo].[EmpleadoLimpieza] CHECK CONSTRAINT [fk_idUsuario3]
GO
ALTER TABLE [dbo].[SolicitudServicio]  WITH CHECK ADD  CONSTRAINT [fk_idCliente] FOREIGN KEY([idCliente])
REFERENCES [dbo].[Cliente] ([idCliente])
GO
ALTER TABLE [dbo].[SolicitudServicio] CHECK CONSTRAINT [fk_idCliente]
GO
ALTER TABLE [dbo].[SolicitudServicio]  WITH CHECK ADD  CONSTRAINT [fk_idEmpleadoLimpieza] FOREIGN KEY([idEmpleado])
REFERENCES [dbo].[EmpleadoLimpieza] ([idEmpleado])
GO
ALTER TABLE [dbo].[SolicitudServicio] CHECK CONSTRAINT [fk_idEmpleadoLimpieza]
GO
ALTER TABLE [dbo].[SolicitudServicio]  WITH CHECK ADD  CONSTRAINT [fk_idServicio] FOREIGN KEY([idServicio])
REFERENCES [dbo].[ServiciosLimpieza] ([idServicio])
GO
ALTER TABLE [dbo].[SolicitudServicio] CHECK CONSTRAINT [fk_idServicio]
GO
ALTER TABLE [dbo].[Usuario]  WITH CHECK ADD  CONSTRAINT [fk_idPersona] FOREIGN KEY([idPersona])
REFERENCES [dbo].[Persona] ([idPersona])
GO
ALTER TABLE [dbo].[Usuario] CHECK CONSTRAINT [fk_idPersona]
GO
/****** Object:  StoredProcedure [dbo].[SP_AltaCliente]    Script Date: 27/03/2019 11:53:21 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
-- =============================================
-- Author:		<Author,,Name>
-- Create date: <Create Date,,>
-- Description:	<Description,,>
-- =============================================
CREATE PROCEDURE [dbo].[SP_AltaCliente]
	-- Add the parameters for the stored procedure here

		
	@nombre varchar(25),
	@apellidos varchar(50),
	@domicilio varchar(50),
	@usuario varchar(10),
	@correo nvarchar(50),
	@contraseña nvarchar(50),
	@tipoUsuario varchar(50),
	@estatus int

	
	
AS
declare @idPersona int 
declare @idCliente int
declare @idUsuario int


 insert into Persona (nombre,apellidos,domicilio)
     values  (@nombre,@apellidos,@domicilio)
set @idPersona=IDENT_CURRENT('persona');

insert into Usuario (usuario,correo,contrasena,tipoUsuario,idPersona) values (@usuario,@correo,@contraseña,@tipoUsuario,@idPersona)
set @idUsuario = IDENT_CURRENT('usuario');

insert into Cliente (idPersona,idUsuario,estatus) values (@idPersona,@idUsuario,@estatus)
 set @idCliente=IDENT_CURRENT('cliente');
 

BEGIN
	-- SET NOCOUNT ON added to prevent extra result sets from
	-- interfering with SELECT statements.
	SET NOCOUNT ON;

    -- Insert statements for procedure here
	
END

GO
/****** Object:  StoredProcedure [dbo].[SP_AltaEmpleado]    Script Date: 27/03/2019 11:53:21 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
-- =============================================
-- Author:		<Author,,Name>
-- Create date: <Create Date,,>
-- Description:	<Description,,>
-- =============================================
Create PROCEDURE [dbo].[SP_AltaEmpleado]
	-- Add the parameters for the stored procedure here

		
	@nombre varchar(25),
	@apellidos varchar(50),
	@domicilio varchar(50),
	@telefono nchar(11),
	@fechaNacimiento date,
	@correo varchar(50),
	@contraseña varchar(50),
	@tipoUsuario varchar(50),
	@certificadoProfesional binary,
	@CURP binary,
	@estatus int

	
	
AS
declare @idPersona int 
declare @idEmpleado int
declare @idUsuario int


 insert into Persona (nombre,apellidos,domicilio,telefono,
 fechaNacimiento)
     values  (@nombre,@apellidos,@domicilio,@telefono,
 @fechaNacimiento)
set @idPersona=IDENT_CURRENT('persona');

insert into Usuario (correo,contraseña,tipoUsuario,idPersona) values (@correo,@contraseña,@tipoUsuario,@idPersona)
set @idUsuario = IDENT_CURRENT('usuario');

insert into EmpleadoLimpieza (certificadoProfesion,CURP,idPersona,idUsuario,estatus) values (@certificadoProfesional,@CURP,
@idPersona,@idUsuario,@estatus)
 set @idEmpleado=IDENT_CURRENT('empleado');
 

BEGIN
	-- SET NOCOUNT ON added to prevent extra result sets from
	-- interfering with SELECT statements.
	SET NOCOUNT ON;

    -- Insert statements for procedure here
	
END

GO
/****** Object:  StoredProcedure [dbo].[SP_ModCliente]    Script Date: 27/03/2019 11:53:21 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
-- =============================================
-- Author:		<Author,,Name>
-- Create date: <Create Date,,>
-- Description:	<Description,,>
-- =============================================
CREATE PROCEDURE [dbo].[SP_ModCliente]
	-- Add the parameters for the stored procedure here

		
	@nombre varchar(50),
	@apellidos varchar(50),
	@domicilio varchar(50),
	@telefono nchar(12),
	@fechaNacimiento date,
	@correo nvarchar(50),
	@contraseña nvarchar(50),
	@idPersona int 

	
	
	
AS




					update Persona set nombre = @nombre,
					apellidos=@apellidos,

					domicilio=@domicilio,
 fechaNacimiento=@fechaNacimiento,
 telefono=@telefono where idPersona=@idPersona;

 update Usuario set correo = @correo , contraseña = @contraseña where idPersona=@idPersona;



 
     

 

BEGIN
	-- SET NOCOUNT ON added to prevent extra result sets from
	-- interfering with SELECT statements.
	SET NOCOUNT ON;

    -- Insert statements for procedure here
	
END

GO
USE [master]
GO
ALTER DATABASE [CleanHouse] SET  READ_WRITE 
GO
